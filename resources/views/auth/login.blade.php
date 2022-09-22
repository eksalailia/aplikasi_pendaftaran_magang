@extends('auth.login.main')
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
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
                                                <h3 class="text-center">Login</h3>
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
                                            <input type="password" name="password" id="myInput" class="form-control 
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
                                                    <input type="checkbox" onclick="myFunction()">
                                                        <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                        <span class="text-inverse">Show Password</span>
                                                    </label>
                                                </div>
                                                <div class="forgot-phone text-right f-right">
                                                    <a href="/password/reset" class="text-right f-w-600"> Lupa Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-t-30">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Masuk</button>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                        <button class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20"><a href="{{ ('register') }}" style="color:white; font-size: 14px;">Buat Akun</a> &nbsp;</button>
                                                </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-md-10">
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
            </div>
        </div>
    </div>
</div>
@endsection
