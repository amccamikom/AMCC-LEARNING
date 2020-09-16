@extends('layouts.app')

@section('contents')
<!-- Page content -->
<div class="container-fluid mt-5">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3 class="h3 text-uppercase text-bold m-0">Product List</h3>
            <button type="button" data-toggle="modal" data-target="#modal-form" class="btn btn-primary btn-sm"> +
                course </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div>
                    <table class="table align-items-center">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Title</th>
                                <th scope="col" class="sort" data-sort="budget">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($product as $value)
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        {{ $value['title'] }}
                                    </div>
                                </td>
                                <td>
                                    {{ $value['description'] }}
                                </td>
                                <td>
                                    <a href="{{ route('admin.product.course.index', $value['id']) }}" class="btn btn-primary btn-sm px-4">GO</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

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
                            <h4 class="h4 text-muted">New Course</h4>
                            <hr>
                        </div>
                        <form role="form" action="{{ route('admin.product.store') }}" method="POST">
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
                                        <span class="input-group-text"><i class="ni ni-align-left-2"></i></span>
                                    </div>
                                    <input name="description" class="form-control" placeholder="Description" type="text">
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
