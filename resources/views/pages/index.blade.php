@extends('layouts.app')
@section('title', 'Home')
@section('content')
<!-- Slider Section (Bootstrap Carousel) -->
<div id="slider" class="carousel slide mt-5" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Slider Images -->
        <div class="carousel-item active secondcarousel">
            <img src="{{ asset('image/mybanner3.jpg')}}" class="d-block w-100" alt="Advertisement 1">
            <div class="winter ms-5 ps-5">
                <h1>Winter Collection</h1>
                <p>You can pay with your bank credit using any bank <br> of your choice to get your goods
               .</p>
                <button class="btn"><span>SHOP NOW</span></button>
            </div>
        </div>
        <div class="carousel-item secondcarousel  p-0">
            <img src="{{ asset('image/mybanner6.jpg')}}" class="d-block" alt="Advertisement 1">
            <div class="summer ms-5 ps-5">
                <h1>Summer<br> Collection</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing<br> elit. Vero aperiam
               .</p>
                <button class="btn"><span>SHOP NOW</span></button>
            </div>
        </div>
        <div class="carousel-item secondcarousel  p-0">
            <img src="{{ asset('image/mybanner5.jpg')}}" class="d-block" alt="Advertisement 1">
            <div class="spring ms-5 ps-5">
                <h1>Spring<br> Collection</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing<br> elit. Vero aperiam
               .</p>
                <button class="btn"><span>SHOP NOW</span></button>
            </div>
        </div>

    </div>
    <a class="carousel-control-prev" href="#slider" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#slider" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>
<div class="container mt-5">
    <div class="row g-5">
        <div class="col-md-6">
            <img src="{{asset('image/dstoree.webp')}}" class="w-100 rounded" alt="">

        </div>
        <div class="col-md-6">
            <img src="{{asset('image/dstore1.jpeg')}}" class="w-100 rounded" alt="">

        </div>
    </div>
</div>
<div class="container mt-5">
    <h2>Featured Products</h2>
    <div class="row">
        <div class="col-lg-3 col-sm-3 col-md-3 mb-4">
            <div class="myproduct">
                <img src="{{asset('image/best-price_300x300.png')}}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-md-3 mb-4">
            <div class="myproduct">
                <img src="{{asset('image/image13.jpg')}}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-md-3 mb-4">
            <div class="myproduct">
                <img src="{{asset('image/image15.jpg')}}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-md-3 mb-4">
            <div class="myproduct">
                <img src="{{asset('image/image14.jpg')}}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-3 col-md-3 mb-4">
            <div class="myproduct">
                <img src="{{ asset('image/flashdrives.jpg')}}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-3 col-md-3 mb-4">
            <div class="myproduct">
                <img src="{{asset('image/image16.jpg')}}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-md-3 mb-4">
            <div class="myproduct">
                <img src="{{asset('image/image17.jpg')}}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-md-3 mb-4">
            <div class="myproduct">
                <img src="{{asset('image/image18.jpg')}}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
        <div class="col-lg-3 col-sm-3 col-md-3 mb-4">
            <div class="myproduct">
                <img src="{{asset('image/1 (20).jpg')}}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
    <nav aria-label="Product Pagination">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item " aria-current="page">
                <a class="page-link" href="#">1 <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>

<!-- Footer Section (You can customize this part) -->

@endsection
