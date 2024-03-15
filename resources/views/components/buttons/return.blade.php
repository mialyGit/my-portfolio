@props([
    'href' => ''
])

<a {{ $attributes->merge(['class' => 'btn btn-icon btn-secondary', 'href' => "$href"]) }}>
    <span class="ul-btn__icon"><i class="i-Previous"></i></span>
    <span class="ul-btn__text">@lang('Return')</span>
</a>