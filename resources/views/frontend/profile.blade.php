@extends('layouts.app')

@section('contents')
<!-- Page content -->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-profile">
                <img src="https://demos.creative-tim.com/argon-dashboard/assets/img/theme/img-1-1000x600.jpg"
                    alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="#">
                                <img src="https://demos.creative-tim.com/argon-dashboard/assets/img/theme/team-4.jpg"
                                    class="rounded-circle">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-6">
                    {{-- <div class="row">
                        <div class="col">
                            <div class="card-profile-stats d-flex justify-content-center">
                                <div>
                                    <span class="heading">22</span>
                                    <span class="description">Friends</span>
                                </div>
                                <div>
                                    <span class="heading">10</span>
                                    <span class="description">Photos</span>
                                </div>
                                <div>
                                    <span class="heading">89</span>
                                    <span class="description">Comments</span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="text-center pt-4">
                        <h5 class="h3">{{ $member->name }}<span class="font-weight-light">, 27</span>
                        </h5>
                        <div class="h5 font-weight-300">
                            <i class="ni location_pin mr-2"></i>{{ $member->email }}
                        </div>
                        <div class="h5 mt-4">
                            <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                        </div>
                        <div>
                            <i class="ni education_hat mr-2"></i>University of Computer Science
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
