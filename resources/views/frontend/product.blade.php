@extends('layouts.app')

@section('contents')
<!-- Page content -->
<div class="container-fluid mt-5">
    <div class="card">
        <div class="card-header">
            <h3 class="h3 text-uppercase text-bold m-0">Product List</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div>
                    <table class="table align-items-center">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Title</th>
                                <th scope="col" class="sort" data-sort="budget">Description</th>
                                <th scope="col" class="sort" data-sort="budget">Course</th>
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
                                    {{ $value->courses()->count() }}
                                </td>
                                <td>
                                    <a href="{{ route('product.course.index', $value['id']) }}"
                                        class="btn btn-primary btn-sm px-4 {{ $value->courses()->exists()?'':'disabled' }}">GO</a>
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
</div>

@endsection
