@extends('auth.login.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Authentication card start -->
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="md-float-material form-material" method="POST" action="{{ route('password.email') }}">
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

                            <div class="form-group form-primary">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span class="form-bar"></span>
                                    <label class="float-label">{{ __('Email Address') }}</label>
                            </div>

                            <div class="row m-t-30">
                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-10">
                                <p class="text-inverse" style="margin-left: 162px"><a href="/login"><b>Back to login</b></a></p>
                            </div>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
