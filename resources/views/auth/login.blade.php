@extends('auth.layouts.app')

@section('contents')
<!-- Page content -->
<div class="container mt--6">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
            <div class="card bg-secondary border-0 mb-0">
                <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center mb-4">
                        <b><small class="h2 text-bold text-uppercase">{{ __('Login') }}</small></b>
                        <hr>
                    </div>
                    <form role="form" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>
                        <div class="custom-control custom-control-alternative custom-checkbox">
                            <div class="row">
                                <div class="col">
                                    <input class="custom-control-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="remember">
                                        <span class="text-muted">{{ __('Remember Me') }}</span>
                                    </label>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-muted">
                                        <small>
                                            {{ __('Forgot Your Password?') }}
                                        </small>
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary my-4">{{ __('Login') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
