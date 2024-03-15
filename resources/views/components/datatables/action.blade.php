@props([
    'edit_href' => '',
    'delete_href' => '',
    'has_edit' => true,
    'has_delete' => true,
])

@if ($has_edit == true)
    <x-buttons.edit href="{{ $edit_href }}" class="btn-xs mr-2"></x-buttons.edit>
    @if($has_delete)
    <x-buttons.delete href="{{ $delete_href }}" class="btn-xs"></x-buttons.delete>
    @endif
@else
    @if($has_delete)
    <x-buttons.delete href="{{ $delete_href }}" class="btn-xs"></x-buttons.delete>
    @endif
@endif
