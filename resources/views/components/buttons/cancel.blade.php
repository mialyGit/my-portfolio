@props([
    'href' => ''
])

<a {{ $attributes->merge(['class' => 'btn btn-light', 'href' => "$href"]) }}>
    <span class="btn-icon"><i class="fa fa-close"></i></span> @lang('Cancel')
</a>