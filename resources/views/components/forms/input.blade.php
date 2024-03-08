@props([
    'type' => 'text',
    'label' => 'Input',
    'model' => 'input',
    'value' => ''
])

<label>@lang($label)</label>
<input type="{{ $type }}" id="{{ $model }}" name="{{ $model }}" value="{{ $value }}" class="form-control" placeholder="{{ $label }}">