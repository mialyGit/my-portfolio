@props([
    'title' => '',
])

<div class="row page-titles mx-0">
  <div class="col-sm-6 p-md-0">
    <div class="welcome-text">
        <h4>@lang($title)</h4>
    </div>
  </div>

  <x-shared.breadcrumb>
    @lang($title)
  </x-shared.breadcrumb>
</div>