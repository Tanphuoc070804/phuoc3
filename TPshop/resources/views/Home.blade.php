@extends('layout')
@section('title','Welcome to TPshop')
@section('title2','Welcome to TPshop')
@section('content')
<div class="container">
        <div class="row text-center">
            <div class="col-md-6 mb-3 py-1">
                <div id="carouselExample1" class="carousel slide pt-3" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">

                            <div class="img-container">
                                <img style="height: 350px;" src="img/giay1.png"
                                    class="img-fluid rounded=0 hover-zoom w-100">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <div class="img-container">
                                <img style="height: 350px;" src="img/giay2.png"
                                    class="img-fluid rounded=0 hover-zoom w-100">
                            </div>

                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <div class="img-container">
                                <img style="height: 350px;" src="img/giay3.png"
                                    class="img-fluid rounded=0 hover-zoom w-100">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3 py-1">
                <div id="carouselExample2" class="carousel slide pt-3" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">

                            <div class="img-container">
                                <img style="height: 350px;" src="img/giay1.png"
                                    class="img-fluid rounded=0 hover-zoom w-100">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <div class="img-container">
                                <img style="height: 350px;" src="img/giay2.png"
                                    class="img-fluid rounded=0 hover-zoom w-100">
                            </div>

                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <div class="img-container">
                                <img style="height: 350px;" src="img/giay3.png"
                                    class="img-fluid rounded=0 hover-zoom w-100">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4 py-1">
                <div class="position-relative">
                    <div class="img-container">
                        <img style="height: 350px;" src="img/giay4.png" class="img-fluid rounded=0 hover-zoom w-100">
                    </div>
                    <div
                        class="caption position-absolute bottom-0  w-100 text-black-bold text-center p-2 text-uppercase fw-bold">
                        Sản phẩm mới
                        <hr>
                    </div>
                </div>


            </div>
            <div class="col-md-4 py-1">
                <div class="position-relative">
                    <div class="img-container">
                        <img style="height: 350px;" src="img/giay5.png" class="img-fluid rounded=0 hover-zoom w-100">
                    </div>
                    <div
                        class="caption position-absolute bottom-0  w-100 text-black-bold text-center p-2 text-uppercase fw-bold">
                        Sản phẩm bán chạy
                        <hr>
                    </div>
                </div>


            </div>
            <div class="col-md-4 py-1">
                <div class="position-relative">
                    <div class="img-container">
                        <img style="height: 350px;" src="img/giay6.png" class="img-fluid rounded=0 hover-zoom w-100">
                    </div>
                    <div
                        class="caption position-absolute bottom-0  w-100 text-black-bold text-center p-2 text-uppercase fw-bold">
                        Sản phẩm sale
                        <hr>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="bg-body-secondary">
        <div class="container py-4">
            <h3 class="mb-4">Sản phẩm mới</h3>
            <div class="row">
            @foreach ($products as $sp)
                <div class="col-md-3">
                
                    <div class="card shadow border-0 hover-trigger">
                        <div class="position-relative zoom-effect">
                            <div class="badge-top">
                            #{{$sp -> id}}
                            </div>
                            <a href="{{route('productdetail', $sp->id) }}">
                                <img src="{{asset('/')}}img/{{$sp->img}}" class="card-img-top" />
                            </a>
                            <a href="javascript:void(0)"
                                class="show-hover btn btn-light position-absolute end-0 bottom-0 rounded-pill mb-3 me-3"
                                ng-click="addToCart({{$sp->id}}, 1)">
                                Thêm vào giỏ</a>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">{{$sp -> name}}</h5>
                            <div class="text-warning mb-3 mt-4 d-flex align-items-center">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span class="text-dark ms-2">Đã bán 123</span>
                            </div>
                            <p class="card-text fs-4 text-danger">{{number_format($sp->price)}}đ</p>
                            <p class="card-text">Phan Thiết</p>
                        </div>
                    </div>
                    
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="bg-body-secondary">
        <div class="container py-4">
            <h3 class="mb-4">Sản phẩm bán chạy</h3>
            <div class="row">
                @foreach ($productbest as $sp)
                    <div class="col-md-3">
                    
                        <div class="card shadow border-0 hover-trigger">
                            <div class="position-relative zoom-effect">
                                <div class="badge-top">
                                #{{$sp -> id}}
                                </div>
                                <a href="{{route('productdetail', $sp->id) }}">
                                    <img src="{{asset('/')}}img/{{$sp->img}}" class="card-img-top" />
                                </a>                                <a href="javascript:void(0)"
                                    class="show-hover btn btn-light position-absolute end-0 bottom-0 rounded-pill mb-3 me-3"
                                    ng-click="addToCart({{$sp->id}}, 1)">
                                    Thêm vào giỏ</a>
                            </div>
    
                            <div class="card-body">
                                <h5 class="card-title">{{$sp -> name}}</h5>
                                <div class="text-warning mb-3 mt-4 d-flex align-items-center">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span class="text-dark ms-2">Đã bán 123</span>
                                </div>
                                <p class="card-text fs-4 text-danger">{{number_format($sp->price)}}đ</p>
                                <p class="card-text">Phan Thiết</p>
                            </div>
                        </div>
                        
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
    <div class="bg-body-secondary">
        <div class="container py-4">
            <h3 class="mb-4">Sản phẩm Sale</h3>
            <div class="row">
                @foreach ($productsale as $sp)
                    <div class="col-md-3">
                    
                        <div class="card shadow border-0 hover-trigger">
                            <div class="position-relative zoom-effect">
                                <div class="badge-top">
                                #{{$sp -> id}}
                                </div>
                                <a href="{{route('productdetail', $sp->id) }}">
                                    <img src="{{asset('/')}}img/{{$sp->img}}" class="card-img-top" />
                                </a>                                <a href="javascript:void(0)"
                                    class="show-hover btn btn-light position-absolute end-0 bottom-0 rounded-pill mb-3 me-3"
                                    ng-click="addToCart({{$sp->id}}, 1)">
                                    Thêm vào giỏ</a>
                            </div>
    
                            <div class="card-body">
                                <h5 class="card-title">{{$sp -> name}}</h5>
                                <div class="text-warning mb-3 mt-4 d-flex align-items-center">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span class="text-dark ms-2">Đã bán 123</span>
                                </div>
                                <p class="card-text fs-4 text-danger">{{number_format($sp->price)}}đ</p>
                                <p class="card-text">Phan Thiết</p>
                            </div>
                        </div>
                        
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
@endsection