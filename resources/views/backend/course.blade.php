@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="https://demos.creative-tim.com/argon-dashboard-pro/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/argon-dashboard-pro/assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/argon-dashboard-pro/assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css"></script>
<link rel="stylesheet" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
@endpush

@section('contents')
<!-- Page content -->
<div class="container-fluid mt-5">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3 class="h3 text-uppercase text-bold m-0">Course List</h3>
            <button type="button" data-toggle="modal" data-target="#modal-form" class="btn btn-primary btn-sm"> +
                course </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="course-table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort">#</th>
                            <th scope="col" class="sort">Title</th>
                            <th scope="col" class="sort">Description</th>
                            <th scope="col" class="sort">Video</th>
                            <th scope="col" class="sort">Attachment</th>
                            <th scope="col" class="sort">Action</th>
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
    <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card bg-secondary border-0 mb-0">
                    <div class="card-body">
                        <div class="text-center">
                            <h4 class="h4 text-muted">New Course</h4>
                            <hr>
                        </div>
                        <form role="form" action="{{ route('admin.product.course.store', $product) }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                    </div>
                                    <input name="title" class="form-control" placeholder="Title" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-button-play"></i></span>
                                    </div>
                                    <input name="video" class="form-control" placeholder="Video" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <input name="attachment" class="form-control form-control-alternative dropify" type="file">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-align-left-2"></i></span>
                                    </div>
                                    <textarea name="description" class="form-control" rows="10"></textarea>
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
<script src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<script>
    $('.dropify').dropify();
</script>
<script>
    $('#course-table').DataTable({
        processing: true,
        serverSide: true,
        oLanguage: {
            "oPaginate": {
                "sPrevious": "<",
                "sNext": ">",
            }
        },
        ajax: "{{ route('admin.product.course.index', $product) }}",
        columns: [
            {
                data: 'DT_RowIndex',
                name: 'DT_RowIndex'
            },
            {
                data: 'title',
                name: 'title'
            },
            {
                data: 'description',
                name: 'description'
            },
            {
                data: 'video',
                name: 'video'
            },
            {
                data: 'attachment',
                name: 'attachment'
            },
            {
                data: 'action',
                name: 'action'
            },
        ]
    });

</script>
@endpush

