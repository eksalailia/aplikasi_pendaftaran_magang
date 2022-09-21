@extends('auth.login.main')

@section('content')

<div class="container"><br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                {{-- <div class="card-header">{{ __('Login') }}</div> --}}

                <div class="row">
                    <div class="col-sm-12">
                        <!-- Authentication card start -->

                            <form class="md-float-material form-material" method="POST" action="{{ route('login') }}">
                                <div class="text-center">
                                    <img src="{{ asset('backend/assets/images/logo.png')}}" alt="logo.png">
                                </div>
                                <div class="auth-box card">
                                    <div class="card-block">
                                        <div class="row m-b-20">
                                            <div class="col-md-12">
                                                <h3 class="text-center">Silahkan Login</h3>
                                            </div>
                                        </div>
                                        @csrf

                                        <div class="form-group form-primary">
                                            <input type="text" name="email" class="form-control
                                            @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                            required autocomplete="email" autofocus>
                                                @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            <span class="form-bar"></span>
                                            <label class="float-label">Email</label>
                                        </div>


                                        <div class="form-group form-primary">
                                            <input type="password" name="password" class="form-control
                                            @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                            <span class="form-bar"></span>
                                            <label class="float-label">Password</label>
                                        </div>

                                        <div class="row m-t-25 text-left">
                                            <div class="col-12">
                                                <div class="checkbox-fade fade-in-primary d-">
                                                    <label>
                                                        <input type="checkbox" value="">
                                                        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                        <span class="text-inverse">Remember me</span>
                                                    </label>
                                                </div>
                                                <div class="forgot-phone text-right f-right">
                                                    <a href="#" class="text-right f-w-600"> Lupa Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-t-30">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Masuk</button>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                                <button class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20"><a href="{{ ('register') }}">Buat Akun</a></button>
                                                </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-md-10">
                                                <p class="text-inverse" style="margin-left: 180px">Thank you.</p>
                                                <p class="text-inverse" style="margin-left: 165px"><a href="/"><b>Back to website</b></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- end of form -->
                    </div>
                    <!-- end of col-sm-12 -->
                </div>

                {{-- <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
