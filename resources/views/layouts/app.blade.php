<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Digital Store @yield('title')</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('image/digitalstorelogo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css')}}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="navbar-item">
                            <a href="{{ url('/')}}" class="nav-link">Home</a>
                        </li>
                        <li class="navbar-item">
                            <a href="{{ route('page.product')}}" class="nav-link">Products</a>
                        </li>
                        <li class="navbar-item">
                            <a href="" class="nav-link">Contact</a>
                        </li>
                    </ul>

                    <!-- Right side of the navbar-->
                    <ul class="navbar-nav ml-auto">

                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a href="{{ route('register')}}" class="nav-link">Register</a>
                        </li>
                        @endif
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('login')}}" class="nav-link">Login</a>
                        </li>
                        @endif
                        @endif
                        @auth
                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               {{ Auth::user()->email}}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a href="{{ route('logout') }}" class="dropdown-item"
                                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                {{__('logout')}}
                            </a>

                                <form id="logout-form" action="{{ route('logout')}}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endif
                    </ul>
            </div>
        </nav> --}}



        <section class="mynavbar">
            <nav class="mb-5 py-3 navbar fixed-top shadow navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid mydiv">
                  <a class="navbar-brand" href="http://127.0.0.1:8000"><img src="{{ asset('image/digitalstorelogo.png') }}" class="w-100" alt="{{ __('') }}"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link text-dark" href="http://127.0.0.1:8000"><b>Home</b></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" text-dark href="{{ route('page.product')}}">
                          <b>Products</b>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-dark" href="#" ><b>Blog</b></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-dark" href="#"><b>Contact</b></a>
                      </li>
                    </ul>
                    <form class="d-flex navbarform">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn" type="submit">Search</button>
                    </form>

                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="" class="nav-link"><i class=" fas fa-shopping-cart"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="http://127.0.0.1:8000/signin" class="nav-link"><i class=" fas fa-user"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link"><i class=" fas fa-heart"></i></a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                          <a href="" class="nav-link"><i class=" fab fa-facebook"></i></a>
                      </li>
                      <li class="nav-item">
                          <a href="" class="nav-link"><i class=" fab fa-instagram"></i></a>
                      </li>
                      <li class="nav-item">
                          <a href="" class="nav-link"><i class=" fab fa-twitter"></i></a>
                      </li>
                      <li class="nav-item">
                        <a href="" class="nav-link"><i class=" fab fa-linkedin"></i></a>
                      </li>
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 text-dark mb-lg-0">
                        @guest
                        @if (Route::has('register'))
                        <li class="nav-item text-dark">
                            <a href="{{ route('login')}}" class="nav-link">Sign In</a>
                        </li>
                        @endif

                        <li class="nav-item mt-2">
                            <span style="color: #7104c4;">||</span>
                        </li>

                        @if (Route::has('login'))
                        <li class="nav-item text-dark">
                            <a href="{{ route('register')}}" class="nav-link">Sign Up</a>
                        </li>
                        @endif
                        @endif
                        @auth
                        <li class="nav-item dropdown">
                            <a href="" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               {{ Auth::user()->email}}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a href="{{ route('logout') }}" class="dropdown-item"
                                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                {{__('Sign Out')}}
                            </a>

                                <form id="logout-form" action="{{ route('logout')}}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endif
                      </ul>
                  </div>
                </div>
              </nav>
        </section>

        <main class="py-1">
            @yield('content')
        </main>
        {{-- <section class="bg-dark">
            <div class="container-fluid">
                <div id="newsbg" class="mt-5">
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6 mt-5 p-5 form">
                            <h1  class="text-light" style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">Subscribe to get discounts and new offers!</h1>
                            <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <form action="">
                                <input type="email" class="form-control" placeholder="enter your email">
                                <button><span class="px-3">SUBSCRIBE</span></button>
                            </form>
                            <div class="news">
                            <h1>Follow us on our social media handles</h1>
                            <ul class="navbar-nav specialnews">
                                <li class="nav-tem d-flex">
                                    <a href="" class="nav-link"><i class="fab fa-facebook"></i></a>

                                    <a href="" class="nav-link"><i class="fab fa-instagram"></i></a>

                                    <a href="" class="nav-link"><i class="fab fa-twitter"></i></a>

                                    <a href="" class="nav-link"><i class="fab fa-linkedin"></i></a>

                                    <a href="" class="nav-link"><i class="fab fa-youtube"></i></a>

                                    <a href="" class="nav-link"><i class="fab fa-tiktok"></i></a>
                                </li>
                            </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="bg-dark text-light">
            <div class="container py-4">
                <div class="row py-3">
                    <div class="col-md col-sm col-lg">
                        <div class="col-md mb-3">
                        <h5>IN NEED?</h5>
                        <p><a href="" class="nav-link">Contact Us</a></p>
                        <p><a href="" class="nav-link">Help Center</a></p>
                        <p><a href="" class="nav-link">Chat with us</a></p>
                        </div>
                        <div class="col-md">
                        <h5>HELPFUL LINKS</h5>
                        <p><a href="" class="nav-link">how to shop on d-store?</a></p>
                        <p><a href="" class="nav-link">Delivery options & timelines</a></p>
                       <p><a href="" class="nav-link">How to return a product on d-store</a></p>
                        <p><a href="" class="nav-link">Report a product</a></p>

                        </div>
                    </div>
                    <div class="col-md">
                        <h5>ABOUT D-STORE</h5>
                        <p><a href="" class="nav-link">About us</a></p>
                        <p><a href="" class="nav-link">Our Career</a></p>
                        <p><a href="" class="nav-link">Terms and Conditions</a></p>
                        <p><a href="" class="nav-link">Privacy and Policy</a></p>
                        <p><a href="" class="nav-link">Our Payment guidlines</a></p>
                        <p><a href="" class="nav-link">Chat with us</a></p>
                        <p><a href="" class="nav-link">Cookies</a></p>
                        <p><a href="" class="nav-link">stores</a></p>
                        <p><a href="" class="nav-link">Instant Sales</a></p>

                    </div>
                    <div class="col-md">
                        <h5>EARN WITH D-STORE</h5>
                        <p><a href="" class="nav-link">Earn with D-Store</a></p>
                        <p><a href="" class="nav-link">Vendor</a></p>
                        <p><a href="" class="nav-link">Become a sales consultant</a></p>
                        <p><a href="" class="nav-link">Join the d-store academy</a></p>
                        <p><a href="" class="nav-link">Join the d-store Super Program</a></p>
                    </div>
                    <div class="col-md">
                      <h5>D-STORE GLOBAL</h5>
                       <div class="py-2">
                        <div class="row">
                            <div class="col-md-4">
                                <p><a href="" class="nav-link"><span>Cote Divoire</span></a></p>
                            </div>
                            <div class="col-md-4">
                               <p><a href="" class="nav-link"><span>Saudi Arabia</span></a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p><a href="" class="nav-link"><span>Spain</span></a></p>
                            </div>
                            <div class="col-md-4">
                                <p><a href="" class="nav-link"><span>Italy</span></a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p><a href="" class="nav-link"><span>Ghana</span></a></p>
                            </div>
                            <div class="col-md-4">
                                <p><a href="" class="nav-link"><span>Nigeria</span></a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p><a href="" class="nav-link"><span>Zimbabwe</span></a></p>
                            </div>
                            <div class="col-md-4">
                                <p><a href="" class="nav-link"><span>Uganda</span></a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p><a href="" class="nav-link"><span>Kenya</span></a></p>
                            </div>
                            <div class="col-md-4">
                                <p><a href="" class="nav-link"><span>Zambia</span></a></p>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md py-auto">
                        <h5>JOIN US NOW</h5>
                        <p><a href="" class="nav-link"><span class="pe-2">Facebook</span><i class="fab fa-facebook"></i></a></p>
                        <p><a href="" class="nav-link"><span class="pe-2">Instagram</span><i class="fab fa-instagram"></i></a></p>
                        <p><a href="" class="nav-link"><span class="pe-2">Twitter</span><i class="fab fa-twitter"></i></a></p>
                        <p><a href="" class="nav-link"><span class="pe-2">Linkedin</span><i class="fab fa-linkedin"></i></a></p>
                        <p><a href="" class="nav-link"><span class="pe-2">Youtube</span><i class="fab fa-youtube"></i></a></p>
                        <p><a href="" class="nav-link"><span class="pe-2">Tiktok</span><i class="fab fa-tiktok"></i></a></p>
                    </div>
                </div>
            </div>
            <div> --}}
                <div class="justify-content-center text-center">
                    <h1 style="font-size: 16px; font-family:sans-serif;">PAYMENT METHODS & DELVERY PARTNER</h1>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

























