@extends('auth.layouts.app')

@section('contents')
<!-- Page content -->
<div class="container mt--6">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="card bg-secondary border-0 mb-0">
                <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center mb-4">
                        <b><small class="h2 text-bold text-uppercase">{{ __('Login') }}</small></b>
                        <hr>
                    </div>
                    <form role="form" action="{{ route('member.login') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input id="secret" type="secret" class="form-control @error('secret') is-invalid @enderror"
                                    name="secret" value="{{ old('secret') }}" placeholder="Enter secret key here..." required autocomplete="secret" autofocus>
                                @error('secret')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="text-center">
                            <button onClick="Check()" type="submit" class="btn btn-primary btn-block my-4">{{ __('Login') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
