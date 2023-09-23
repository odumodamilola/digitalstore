{{-- @extends('layouts.app')

@section('content')

<section class="container mt-5 py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5">
            <h4 class="fw-bold mb-5">Create your Spotlight <span style="color: #7104c4">store</span> accounts</h4>
            <form method="POST" action="{{ route('register') }}">
              @csrf

                <div class="col-md mb-4">
                    <label for="firstname" class="col-md-4 col-form-label">{{ __('First Name') }}</label>

                    <div class="col-md">
                        <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                        @error('firstname')
                        <div class="alert invalid-feedback alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md">
                    <label for="lastname" class="col-md-4 col-form-label">{{ __('Last Name') }}</label>

                    <div class="col-md">
                        <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                        @error('lastname')
                        <div class="alert invalid-feedback alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                </div>

              <div class=" col-md mb-4">
                <label for="email" class="col-md-4 col-form-label">{{ __('Email Address') }}</label>

                <div class="col-md">
                   <input id="email" type="email" placeholder="example@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                     @error('email')
                     <div class="alert invalid-feedback alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                     </div>
                     @enderror
                </div>
              </div>

              <div class=" col-md mb-4">
                <label for="userprofilepicture" class="col-md-4 col-form-label">{{ __('User Image Url')}}</label>

                <div class="col-md">
                    <input  id="userprofilepicture" type="text" class="form-control @error('userprofilepicture') is-invalid @enderror" name="userprofilepicture" value="{{ old('userprofilepicture') }}" required autocomplete="userprofilepicture">
                    @error('userprofilepicture')
                        <div class="alert invalid-feedback alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
              </div>

              <div class=" col-md mb-4">
                <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>

                    {{-- <div>
                        <input type="password" class="form-control" placeholder="Enter your password" id="password"><br>
                        <span class="">
                            <input type="checkbox" class="form-check-input me-2" id="showPasswordCheckbox">
                            <label for="">show password</label>
                        </span>
                        @error('password')
                            <div class="alert alert-danger" role="alert">
                            {{$message}}
                            </div>
                        @enderror
                    </div> --}}
                    {{-- <div class="col-md">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your password" required autocomplete="new-password">
                        <span class="">
                            <input type="checkbox" class="form-check-input me-2" id="showPasswordCheckbox">
                            <label for="">show password</label>
                        </span>
                        <script src="{{ asset('js/script.js')}}"></script>
                        @error('password')
                        <div class="alert invalid-feedback alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
              </div>


              <div class="col-md mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label">{{ __('Confirm Password') }}</label>

                <div class="col-md">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> --}}
                    {{-- <span class="">
                        <input type="checkbox" class="form-check-input me-2" id="showPasswordCheckbox">
                        <label for="">show password</label>
                    </span> --}}
                {{-- </div>
              </div>


              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked>
                <label class="form-check-label" for="form2Example33">
                  Subscribe to our newsletter
                </label>
              </div>

              <button type="submit" class="btn" style="color: white;background-color:#7104c4;">
                {{ __(' Sign Up') }}
            </button>

              <div class="text-center socialmedia ">
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
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
      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="{{ asset('image/selling-products5.jpg')}}" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
</section> --}}
{{-- @endsection --}}


















@extends('layouts.app')

@section('content')

<section class="container mt-5 py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5">
            <h4 class="fw-bold mb-5">Create your Spotlight <span style="color: #7104c4">store</span> accounts</h4>
            <form method="POST" action="{{ route('register') }}">
              @csrf

                <div class="col-md mb-4">
                    <label for="firstname" class="col-md-4 col-form-label">{{ __('First Name') }}</label>

                    <div class="col-md">
                        <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}">

                        @error('firstname')
                        <div class="alert invalid-feedback alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md">
                    <label for="lastname" class="col-md-4 col-form-label">{{ __('Last Name') }}</label>

                    <div class="col-md">
                        <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}">

                        @error('lastname')
                        <div class="alert invalid-feedback alert-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                </div>

              <div class=" col-md mb-4">
                <label for="email" class="col-md-4 col-form-label">{{ __('Email Address') }}</label>

                <div class="col-md">
                   <input id="email" type="email" placeholder="example@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">

                     @error('email')
                     <div class="alert invalid-feedback alert-danger" role="alert">
                        <strong>{{ $message }}</strong>
                     </div>
                     @enderror
                </div>
              </div>

              <div class=" col-md mb-4">
                <label for="userprofilepicture" class="col-md-4 col-form-label">{{ __('User Image Url')}}</label>

                <div class="col-md">
                    <input  id="userprofilepicture" type="text" class="form-control @error('userprofilepicture') is-invalid @enderror" name="userprofilepicture" value="{{ old('userprofilepicture') }}">
                    @error('userprofilepicture')
                        <div class="alert invalid-feedback alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>
              </div>

              <div class=" col-md mb-4">
                <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>

                    <div class="col-md">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your password">
                        <span class="">
                            <input type="checkbox" class="form-check-input me-2" id="showPasswordCheckbox">
                            <label for="">view password</label>
                        </span>
                        @error('password')
                        <div class="alert invalid-feedback alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
              </div>


              <div class="col-md mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label">{{ __('Confirm Password') }}</label>

                <div class="col-md">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                </div>
              </div>


              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked>
                <label class="form-check-label" for="form2Example33">
                  Subscribe to our newsletter
                </label>
              </div>

              <button type="submit" class="btn" style="color: white;background-color:#7104c4;">
                {{ __(' Sign Up') }}
            </button>

              <div class="text-center socialmedia ">
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
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
      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="{{ asset('image/selling-products5.jpg')}}" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
</section>
@endsection
