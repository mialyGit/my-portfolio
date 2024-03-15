@props([
    'src' => '',
    'alt' => ''
])

@if ($src)
    <a href="{{ $src }}" target="_blank">
        <img {{ $attributes->merge(['class' => 'avatar-md rounded mr-sm-3', 'src' => "$src", 'alt'=>"$alt", 'width' => '50']) }}>
    </a>
@else
    <span>@lang('No image')</span>
@endif
