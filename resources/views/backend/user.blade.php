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
            <h3 class="h3 text-uppercase text-bold m-0">User List</h3>
            <button type="button" data-toggle="modal" data-target="#modal-form" class="btn btn-primary btn-sm"> +
                course </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="user-table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort">#</th>
                            <th scope="col" class="sort">Name</th>
                            <th scope="col" class="sort">Email Address</th>
                            <th scope="col" class="sort">Since</th>
                        </tr>
                    </thead>
                    <tbody class="list">
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <small class="m-0 text-muted">{{ date('F, d Y') }}</small>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card bg-secondary border-0 mb-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center">
                            <h4 class="h4 text-muted">New U ser</h4>
                            <hr>
                        </div>
                        <form role="form" action="{{ route('admin.user.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                    </div>
                                    <input name="name" class="form-control" placeholder="name" type="text" value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input name="email" class="form-control" placeholder="email"
                                        type="email" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input name="password" class="form-control" placeholder="password"
                                        type="password" value="{{ old('password') }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm btn-block">submit</button>
                        </form>
                    </div>
                </div>
            </div>
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
    $('#user-table').DataTable({
        processing: true,
        serverSide: true,
        oLanguage: {
                "oPaginate": {
                    "sPrevious": "<", // This is the link to the previous page
                    "sNext": ">", // This is the link to the next page
            }
        },
        ajax: "{{ route('admin.user.index') }}",
        columns: [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'email',
                name: 'email'
            },
            {
                data: 'created_at',
                name: 'created_at'
            },
        ]
    });

</script>
@endpush
