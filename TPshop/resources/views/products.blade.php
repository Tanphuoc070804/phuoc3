@extends('layout')
@section('title', 'Welcome to TPshop')
@section('title2', 'Sản Phẩm')
@section('content')
    <div class="container mb-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-auto">
                <div class="dropdown d-inline-block me-2">
                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Chọn Danh Mục
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @foreach ($dsdm as $item)
                            <li><a class="dropdown-item" href="{{ route('productBycategoriesId', $item->id) }}">{{ $item->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <form class="d-inline-block" action="{{ route('product.search') }}" method="GET">
                    <div class="input-group">
                        <input class="form-control" type="search" name="query" placeholder="Tìm kiếm sản phẩm" aria-label="Tìm kiếm">
                        <button class="btn btn-outline-success" type="submit">Tìm kiếm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <main class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="p-4 bg-white rounded shadow-sm">
                        <h2 class="h4">Danh Mục</h2>
                        <!-- Danh sách danh mục -->
                        <ul class="list-unstyled">
                            @foreach ($dsdm as $item)
                                <li class="mb-2"><a href="{{ route('productBycategoriesId', $item->id) }}" class="text-decoration-none text-primary">{{ $item->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row g-4">
                        <!-- Danh sách sản phẩm -->
                        @foreach ($dssp as $item)
                            <div class="col-md-4">
                                <div class="card h-100 shadow-sm">
                                    <a href="{{route('productdetail', $item->id) }}">
                                    <img src="{{asset('/')}}img/{{$item->img}}" class="card-img-top" />
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->name }}</h5>
                                        <p class="card-text text-success">{{ number_format($item->price, 0, '.', ',') }} <u>VND</u></p>
                                        <p class="card-text">{{ $item->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <nav aria-label="Page navigation" class="mt-4">
                        <!-- Phân trang -->
                        <ul class="pagination justify-content-center">
                        <!-- {{$dssp->links('pagination::default')}} -->
                            {{$dssp->appends(['query' => $kyw])->links('pagination::default')}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>
@endsection
