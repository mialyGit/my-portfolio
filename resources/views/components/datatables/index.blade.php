@props([
    'data' => [],
    'src' => ""
])

@push('js')
<script>
    $(document).ready(function () {
        // Get Current Locale to set Datatable language
        var language = "{{ app()->getLocale() }}";

        var columns = [];
        // Initialize first 'id' column in datatable
        const id_column = {
            data: 'DT_RowIndex', name : 'id', orderable: false, width: '10px'
        };
        columns.push(id_column)

        // Get all data from x-datatables components
        var dataTableData = @json($data);
        dataTableData.forEach(e => {
            if(e.width)
                columns.push({data: e.name, width: e.width})
            else 
                columns.push({data : e.name})
        });

        // Initialize last 'action' column in datatable
        const action_column = {
            data: 'action', orderable: false, searchable: false
        };
        columns.push(action_column)

        // Set data to the datatables
        var table = $('#example2').DataTable({
            processing: true,
            serverSide: true,
            order: [],
            language : {
                url : "{{ asset('assets/vendor/datatables/lang') }}"+'/'+language+'.json'
            },
            ajax: "{{ $src }}",
            columns: columns
        });

        table.on('click', '.remove-btn[data-remove-url]', function (e) {
            const url = $(this).attr('data-remove-url');
            
            swal({
                title: "@lang('Are you sure') ?",
                text: "",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#0CC27E',
                cancelButtonColor: '#FF586B',
                confirmButtonText: " <span class=\"btn-icon\"><i class=\"fa fa-check\"></i></span> @lang('Confirm')",
                cancelButtonText: " <span class=\"btn-icon\"><i class=\"fa fa-close\"></i></span> @lang('Cancel')",
                confirmButtonClass: 'btn btn-primary mr-4',
                cancelButtonClass: 'btn btn-light',
                buttonsStyling: false
            }).then(function (e) {

                if(e.dismiss) return;

                $.ajax({
                    url,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'DELETE',
                    data: { method: '_DELETE' , submit : true },
                    success : function (data) {
                        swal({
                            title: data?.message,
                            type: 'success'
                        })
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.status, status, error);
                        let message = xhr.responseJSON?.message
                        if(message && message.includes('Integrity constraint violation')) {
                            message = 'Can not delete this because this row because it is associate with another model'
                        }
                        swal({
                            type: 'error',
                            title: error +' ('  +xhr.status+')',
                            text: message
                        });

                    }

                }).always(function (data) {

                    table.ajax.reload();

                });

            }, function (dismiss) {

            });
        });
         
    });
</script>
@endpush

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="display" id="example2" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                @foreach($data as $column)
                                    <th>@lang($column['header'])</th>
                                @endforeach
                                <th class="action">@lang('Action')</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
