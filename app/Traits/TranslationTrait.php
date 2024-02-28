<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Mgcodeur\SuperTranslator\GoogleTranslate;
use Spatie\Translatable\HasTranslations;

trait TranslationTrait
{
    use HasTranslations;

    public function getAvailableLocales()
    {
        return LaravelLocalization::getLocalesOrder();
    }

    public function getAvailableLocaleKeys()
    {
        return LaravelLocalization::getSupportedLanguagesKeys();
    }

    public function fillEmptyTranslations($localeKeys = null)
    {
        if (is_string($localeKeys)) {
            return '';
        }

        if ($localeKeys) {
            return array_fill_keys($localeKeys, '');
        }

        return array_fill_keys($this->getAvailableLocaleKeys(), '');
    }

    public function translateValue(string $value)
    {
        $defaultLocale = $this->getLocale();

        return array_merge(
            [
                $defaultLocale => $value,
            ],
            $this->translateValueExceptDefaultLocale($value, $defaultLocale)
        );
    }

    public function getExistingKeysInArrayValue(array $values)
    {
        return array_intersect($this->getAvailableLocaleKeys(), array_keys($values));
    }

    public function getMissingKeysInArrayValue(array $values)
    {
        return array_diff($this->getAvailableLocaleKeys(), array_keys($values));
    }

    public function translateMissingValue(array $values)
    {
        $missingKeyValues = $this->getMissingKeysInArrayValue($values);
        if (! $missingKeyValues) {
            return $values;
        }

        $existingKeyValues = $this->getExistingKeysInArrayValue($values);
        if ($existingKeyValues) {
            $locale = $existingKeyValues[0];

            $translatedValues = $this->googleTranslate($locale, $missingKeyValues, $values[$locale]);

            return array_merge($values, $translatedValues);
        }

        return $this->fillEmptyTranslations();

    }

    public function googleTranslate($from, $to, $text)
    {

        try {
            return GoogleTranslate::translate($from, $to, $text);
        } catch (\Exception $e) {
            Log::error($e->getMessage());

            return $this->fillEmptyTranslations($to);
        }
    }

    public function translateValueExceptDefaultLocale($value, $defaultLocale)
    {
        $otherKeysThanLocales = array_filter($this->getAvailableLocaleKeys(), fn ($m) => $m != $defaultLocale);

        return $this->googleTranslate($defaultLocale, array_values($otherKeysThanLocales), $value);
    }

    public function setTranslations(string $key, array $translations): self
    {
        $this->guardAgainstNonTranslatableAttribute($key);

        if (! empty($translations)) {

            $translatedValues = [];
            foreach ($this->getAvailableLocaleKeys() as $locale) {
                if (isset($translations[$locale])) {
                    $translatedValues[$locale] = $translations[$locale];
                } else {
                    $translatedValues[$locale] = '';
                }
            }

            $this->attributes[$key] = $this->asJson($translatedValues);

            // if ($keyToFills) {
            //     $mergedAttributes = array_merge($this->getTranslations($key), $this->fillEmptyTranslations($keyToFills));

            //     $this->attributes[$key] = $this->asJson($mergedAttributes);
            // }

        } else {
            $this->attributes[$key] = $this->asJson($this->fillEmptyTranslations());
        }

        return $this;
    }

    public function setAttribute($key, $value)
    {
        if ($this->isTranslatableAttribute($key) && is_array($value)) {

            return $this->setTranslations($key, $value);
        }

        // Pass arrays and untranslatable attributes to the parent method.
        if (! $this->isTranslatableAttribute($key) || is_array($value)) {

            return parent::setAttribute($key, $value);
        }

        // If the attribute is translatable and not already translated, set a
        // translation for the current app locale.
        return $this->setTranslations($key, $this->translateValue($value));
    }
}
