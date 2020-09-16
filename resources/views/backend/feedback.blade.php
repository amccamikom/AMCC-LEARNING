@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="https://demos.creative-tim.com/argon-dashboard-pro/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/argon-dashboard-pro/assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/argon-dashboard-pro/assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css"></script>
@endpush

@section('contents')
<!-- Page content -->
<div class="container-fluid mt-5">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3 class="h3 text-uppercase text-bold m-0">Feedback</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="feedback-table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort">#</th>
                            <th scope="col" class="sort">Subject</th>
                            <th scope="col" class="sort">Created At</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <small class="m-0 text-muted"></small>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="https://demos.creative-tim.com/argon-dashboard-pro/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="https://demos.creative-tim.com/argon-dashboard-pro/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://demos.creative-tim.com/argon-dashboard-pro/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="https://demos.creative-tim.com/argon-dashboard-pro/assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
<script>
    $('#feedback-table').DataTable({
        processing: true,
        serverSide: true,
        oLanguage: {
            "oPaginate": {
                "sPrevious": "<", // This is the link to the previous page
                "sNext": ">", // This is the link to the next page
            }
        },
        ajax: "{{ route('admin.feedback.index') }}",
        columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex'
            },
            {
                data: 'subject',
                name: 'subject'
            },
            {
                data: 'created_at',
                name: 'created_at'
            },
        ]
    });

</script>
@endpush
