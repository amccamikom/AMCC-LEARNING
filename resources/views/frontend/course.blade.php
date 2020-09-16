@extends('layouts.app')

@section('contents')

<!-- Page content -->
<div class="container-fluid mt-5">
    <div class="card shadow">
        <div class="card-header">
            <h3 class="h3 text-uppercase text-bold m-0">{{ $course['title'] }}</h3>
        </div>
        <div class="card-body">
            <div class="card-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $course['video'] }}?rel=0?control=1"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div class="card-body">
                <div class="nav-wrapper">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab"
                                href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1"
                                aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab"
                                href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2"
                                aria-selected="false">Attachment</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel"
                        aria-labelledby="tabs-icons-text-1-tab">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <tr>
                                    <td>
                                        {{ $course['description'] }}
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>
                                        <small class="text-muted">Last updated:
                                            {{ date_format($course['updated_at'], 'F, d Y') }}</small>
                                    </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel"
                        aria-labelledby="tabs-icons-text-2-tab">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Attachment</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <tr>
                                    <td>
                                        @if (is_null(basename($course['attachment'])))
                                        <a href="{{ $course['attachment'] }}" class="text-gray text-decoration-none">
                                            <i class="fa fa-file fa-2x mr-2" aria-hidden="true"></i>Click here to download!
                                        </a>
                                        @else
                                            <span class="text-muted">No attachment available</span>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-between">
                <a href="{{ is_null($previous)?'#':route('product.course.show',['product' => $product, 'course' => $previous]) }}"
                    class="btn btn-primary btn-sm px-4 {{ is_null($previous)?'disabled':'' }}">Previous</a>
                <a href="{{ is_null($next)?'#':route('product.course.show',['product' => $product, 'course' => $next]) }}"
                    class="btn btn-primary btn-sm px-4 {{ is_null($next)?'disabled':'' }}">Next</a>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
