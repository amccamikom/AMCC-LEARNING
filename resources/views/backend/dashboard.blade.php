@extends('layouts.app')

@section('contents')
<!-- Page content -->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">PRODUCT LIST</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $product }} Course</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-orange text-white rounded-circle shadow">
                                <i class="ni ni-align-left-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer py-2">
                    <a href="{{ route('admin.product.index') }}" class="text-warning font-weight-300"><i
                            class="fa fa-info-circle">
                        </i> <span class="text-xs">
                            Get More Info...
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">MEMBER LIST</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $member }} Person</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                <i class="ni ni-circle-08"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer py-2">
                    <a href="{{ route('admin.member.index') }}" class="text-warning font-weight-300"><i
                            class="fa fa-info-circle">
                        </i> <span class="text-xs">
                            Get More Info...
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">FEEDBACK</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $feedback }} Response</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                                <i class="ni ni-spaceship"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer py-2">
                    <a href="{{ route('admin.feedback.index') }}" class="text-warning font-weight-300"><i
                            class="fa fa-info-circle">
                        </i> <span class="text-xs">
                            Get More Info...
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
