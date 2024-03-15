@props([
    'href' => ''
])

<a {{ $attributes->merge(['class' => 'btn btn-icon btn-primary', 'href' => "$href"]) }}>
    <span class="btn-icon"><i class="fa fa-plus"></i></span> @lang('Add')
</a>