@extends('auth.login.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Authentication card start -->

                        <form class="md-float-material form-material" method="POST" action="{{ route('password.update') }}">
                        <div class="text-center">
                                    <img src="{{ asset('backend/assets/images/logo.png')}}" alt="logo.png">
                                </div>
                                <div class="auth-box card">
                                    <div class="card-block">
                                        <div class="row m-b-20">
                                            <div class="col-md-12">
                                                <h3 class="text-center">Reset Password</h3>
                                            </div>
                                        </div>
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group form-primary">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="form-bar"></span>
                                    <label class="float-label">{{ __('Email Address') }}</label>
                            </div>

                            <div class="form-group form-primary">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="form-bar"></span>
                                    <label class="float-label">Password</label>
                            </div>

                            <div class="form-group form-primary">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <span class="form-bar"></span>
                                    <label class="float-label">Reset Password</label>
                            </div>

                            <div class="row m-t-30">
                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
