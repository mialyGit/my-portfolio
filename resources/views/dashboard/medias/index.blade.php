@extends('layouts.master')

@push('page_title')
    @lang('Medias')
@endpush

@push('css')
    <link href="{{ asset('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/select2/css/select2.min.css') }}" rel="stylesheet">
@endpush

@push('js')
    <script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/select2/js/select2.full.min.js') }}"></script>
    <script>
        $("#type-media").select2({
            placeholder: "Filter by type",
            allowClear: true
        });
    </script>
@endpush

@section('content')
    <x-shared.head title="Medias" />

    <div class="row mb-2">
        <div class="col col-md-4">
            <div class="form-group">
                <select id="type-media">
                    <option></option>
                    <option value="AL">Image</option>
                    <option value="WY">PDF</option>
                </select>
            </div>
        </div>
        <div class="col text-right">
            <x-buttons.add href="{{ route('dashboard.medias.create') }}"></x-buttons.add>
        </div>
    </div>


    <x-datatables
        :data="[
            ['header' => '', 'name' => 'image', 'width' => '10%'],
            ['header' => 'Nom du fichier', 'name' => 'filename'],
            ['header' => 'Extension', 'name' => 'extension'],
            ['header' => 'Size', 'name' => 'size'],
            ['header' => 'Updated date', 'name' => 'updated_at'],
            ['header' => 'Type', 'name' => 'aggregate_type'],
        ]"
    />
@endsection