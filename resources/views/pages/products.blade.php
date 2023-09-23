@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div>
    <div id="backgroundimage" class="container">
        {{-- <img src="{{asset('image/products-page-heading.jpg')}}" alt=""> --}}
        <div class="headerit ps-5 text-light">
            <h1>OUR AVAILABLE PRODUCTS</h1><br>
        </div>
    </div>
</div>
<div class="container mt-5">
    <h2>Our Products</h2>
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-md-4 mb-4">
            <form>
            <div class="carde">
                <img src="{{asset('image/Item_3_1-300x300 (1).jpg')}}" class="w-60 h-50">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
            </form>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-4 mb-4">
            <div class="carde">
                <img src="{{asset('image/Item_4_1-300x300.jpg')}}">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-4 mb-4">
            <div class="carde">
                <img src="{{ asset('image/Item_5-300x300 (1).jpg')}}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn ">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-4 mb-4">
            <div class="carde">
                <img src="{{ asset('image/Item_7-300x300.jpg')}}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-4 mb-4">
            <div class="carde">
                <img src="{{asset('image/Item_8_1-300x300.jpg')}}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn ">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-4 mb-4">
            <div class="carde">
                <img src="{{asset('image/Item_9-300x300.jpg')}}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn ">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-4 mb-4">
            <div class="carde">
                <img src="{{asset('image/Item_10-300x300 (1).jpg')}}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-4 mb-4">
            <div class="carde">
                <img src="{{asset('image/Item_11_1-300x300.jpg')}}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-4 mb-4">
            <div class="carde">
                <img src="{{asset('image/image3.jpg')}}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-4 mb-4">
            <div class="carde">
                <img src="{{asset('image/image4.jpg')}}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-4 mb-4">
            <div class="carde">
                <img src="{{asset('image/image8.png')}}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn ">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-4 mb-4">
            <div class="carde">
                <img src="{{asset('image/image5.png')}}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-4 mb-4">
            <div class="carde">
                <img src="{{ asset('image/image7.png')}}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-3 col-md-3 mb-4">
            <div class="carde">
                <img src="{{ asset('image/image9.gif')}}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-4 mb-4">
            <div class="carde">
                <img src="{{ asset('image/image10.png')}}" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Product 2</h5>
                    <p class="card-text">$29.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-md-4 mb-4">
            <div class="carde">
                <img src="{{ asset('image/image12.gif')}}" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Product 2</h5>
                    <p class="card-text">$29.99</p>
                    <a href="#" class="btn">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
