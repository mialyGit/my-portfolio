@props([
    'segments' => [],
])

<div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard.index') }}">@lang('Dashboard')</a>
        </li>
        @foreach ($segments as $segment)
            <li class="breadcrumb-item">
                <a href="{{ $segment['url'] }}">@lang($segment['title'])</a>
            </li>
        @endforeach
        <li class="breadcrumb-item active">{{ $slot }}</li>
    </ol>
</div>
