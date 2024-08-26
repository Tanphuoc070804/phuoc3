@extends('layout')
@section('title', 'Welcome to TPshop')
@section('title2', 'Welcome to TPshop')
@section('content')
<div class="container">
    <header>
        <h1>Trang Quản Trị</h1>
    </header>

    <nav>
        <ul>
            <li><a href="/admin">Trang Chủ</a></li>
            <li><a href="/productlist">Sản phẩm</a></li>
            <li><a href="/users">Người dùng</a></li>
            <li><a href="/updateproducts">Form Cập nhật</a></li>
        </ul>
    </nav>
    <div class="row">
        <div class="col-md-3 py-4">
            <h2>Thêm Mới Sản Phẩm</h2>
            
            <form action="{{ route('productadd') }}" method="post" enctype="multipart/form-data">
                @csrf
                <select name="category_id" id="">
                    <option value="0" selected>Chọn danh mục</option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>

                <input type="text" name="name" placeholder="Tên sản phẩm">
                <input type="number" name="price" placeholder="Giá">
                <input type="file" name="img">
                <input type="number" name="quantity" placeholder="so luong">
                <input type="number" name="sold" placeholder="luot ban">
                <input type="submit" value="Thêm">
                
            </form>

        </div>

        <div class="col-md-9 py-4">
            <h2>Danh Sách Sản Phẩm</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Hình ảnh</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Lượt bán</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td><img src="{{ asset('img/' . $item->img) }}" class="card-img-top" style="width: 100px; height: auto;" alt="..."></td>
                            <td>{{$item->name}}</td>
                            <td>{{ number_format($item->price, 0, '.', ',') }} <u>VND</u></td>
                            <td>{{$item->quantity}}</td>    
                            <td>{{$item->sold}}</td>
                            <td class="action-icons">
                                <a href="{{ route('productupdateform', ['id' => $item->id]) }}">Sửa</i></a>
                                <a href="{{ route('productdelete', ['id' => $item->id]) }}">Xoá</i></a>
                            </td>
                        </tr>
                    @endforeach

                    <!-- Các hàng khác -->
                </tbody>
            </table>
            <ul class="pagination justify-content-center pt-4">
                {{$products->links('pagination::default')}}
            </ul>
        </div>
    </div>
    @endsection