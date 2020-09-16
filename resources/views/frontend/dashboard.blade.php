@extends('layouts.app')

@section('contents')
<!-- Page content -->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="h1 card-title text-gray mb-0">Information</h5>
                            <span class="font-smaller font-weight-300 text-muted mb-0">new, info, update, etc</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                <i class="ni ni-notification-70"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <p class="text-gray">
                            {{ $information['paragraph'] }}
                        </p>
                        <span class="text-gray font-weight-300 text-sm text-small">{{ date_format($information['created_at'], 'F, d Y') }}</span>
                    </p>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="h3 card-title text-muted mb-0">Product List</h5>
                            <span class="font-smaller text-sm font-weight-300 text-muted mb-0">module, video, etc</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                <i class="ni ni-align-left-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer py-2">
                    <a href="{{ route('product.index') }}" class="text-warning font-weight-300"><i class="fa fa-info-circle">
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
                    <div class="row">
                        <div class="col">
                            <h5 class="h3 card-title text-muted mb-0">User's Profile</h5>
                            <span class="font-smaller text-sm font-weight-300 text-muted mb-0">update & view</span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-pink text-white rounded-circle shadow">
                                <i class="ni ni-circle-08"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer py-2">
                    <a href="" class="text-warning font-weight-300"><i class="fa fa-info-circle">
                        </i> <span class="text-xs">
                            Get More Info...
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
