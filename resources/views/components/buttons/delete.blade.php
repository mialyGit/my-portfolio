@props([
    'href' => ''
])

<button {{ $attributes->merge(['class' => 'btn btn-danger remove-btn', 'data-remove-url' => "$href"]) }}>
    <span class="btn-icon"><i class="fa fa-trash"></i></span> @lang('Delete')
</button>