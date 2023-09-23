@extends('layouts.app')

@section('content')
</section>
<div class="container py-4">
  <div class="row g-0 align-items-center">
    <div class="col-lg-6 mb-5 mb-lg-0">
      <div class="card cascading-right" style="
          background: hsla(0, 0%, 100%, 0.55);
          backdrop-filter: blur(30px);
          ">
        <div class="card-body p-5 shadow-5">
          <h4 class="fw-bold mb-5">Sign in to your Spotlight <span style="color:#7104c4;">store</span> accounts</h4>
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-outline col-md mb-4">
              <label class="form-label" for="email">{{ __('Email Address') }}</label>
              <div>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                   @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                   @enderror
              </div>
            </div>

            <div class="form-outline col-md mb-4">
                <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>
                <div>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                     @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" style="color: white;background-color:#7104c4;" class="btn" >
                        {{ __('Sign In') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a style="text-decoration: none; color:#7104c4; background:none;background-color:none;" class="" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>

            <div class="socialmedia ">
              <p>or sign up by clicking <span class=" nav-item"><a style="background-color:none; background:none;color:#7104c4;" href="http://127.0.0.1:8000/signup">here</a></span></p>
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab  fa-facebook-f"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab text-dan fa-google"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-linkedin"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="col-md-6 mb-5 mb-lg-0">
      <img src="{{ asset('image/selling-products5.jpg')}}" class="w-100 rounded-4 shadow-4"
        alt="" />
    </div>
  </div>
</div>
</section>
@endsection
