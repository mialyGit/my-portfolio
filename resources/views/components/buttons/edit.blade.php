@props([
    'href' => ''
])

<a {{ $attributes->merge(['class' => 'btn btn-primary', 'href' => "$href"]) }}>
    <span class="btn-icon"><i class="fa fa-edit"></i></span>@lang('Edit')
</a>