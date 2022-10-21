@extends('auth.login.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Authentication card start -->

                            <form class="md-float-material form-material" method="POST" action="{{ route('register') }}">
                                <div class="text-center">
                                    {{-- <img src="{{ asset('backend/assets/images/logo.png')}}" alt="logo.png"> --}}
                                </div>
                                <div class="auth-box card">
                                    <div class="card-block">
                                        <div class="row m-b-20">
                                            <div class="col-md-12">
                                                <h3 class="text-center">Register</h3>
                                            </div>
                                        </div><br><br>
                                        @csrf


                                        <div class="form-group form-primary">
                                            <input type="text" name="name" class="form-control
                                            @error('name') is-invalid
                                            @enderror" name="name" value="{{ old('name') }}" required
                                            autocomplete="name" autofocus>
                                                @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            <span class="form-bar"></span>
                                            <label class="float-label">Nama</label>
                                        </div>

                                        <div class="form-group form-primary">
                                            <input type="email" name="email" class="form-control
                                            @error('email')
                                            is-invalid @enderror" name="email" value="{{ old('email') }}"
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
                                        <select name="role" value="{{ old('role') }}" required
                                            autocomplete="role" autofocus class="form-control" style="font-size: 14px;">
                                            <option value="applicant" style="font-size: 14px;">Pendaftar</option>
                                        </select>
                                            <span class="form-bar"></span>
                                            <!-- <label class="float-label">Role</label> -->
                                        </div>

                                        <div class="form-group form-primary">
                                            <input type="password" name="password" class="form-control
                                            @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                            <span class="form-bar"></span>
                                            <label class="float-label">Password</label>
                                        </div>

                                    <div class="form-group form-primary">
                                        <input type="password" name="password_confirmation" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <span class="form-bar"></span>
                                        <label class="float-label">Konfirmasi Password</label>
                                    </div>

                                        <div class="row m-t-30">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Registrasi</button>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-md-10">
                                                <p class="text-inverse" style="margin-left: 162px"><a href="/"><b>Back to website</b></a></p>
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
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
