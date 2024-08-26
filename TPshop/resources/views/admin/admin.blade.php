@extends('layout')
@section('title','Welcome to TPshop')
@section('title2','Welcome to TPshop')
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
    <div class="grid" >
        <div class="card">
            <h2>Doanh số bán hàng</h2>
            <canvas id="salesChart" width="400" height="200"></canvas>
        </div>
        <div class="card">
            <h2>Đơn hàng mới</h2>
            <p>100</p>
        </div>
        <div class="card">
            <h2>Sản phẩm bán chạy</h2>
            <p>50</p>
        </div>
    </div>
    <div class="grid" >
        <div class="card">
            <h2>Danh sách sản phẩm</h2>
            
        </div>
        <div class="card">
            <h2>Bình luận</h2>
            <p>100</p>
        </div>
        <div class="card">
            <h2>Khách hàng mới</h2>
            <p>50</p>
        </div>
    </div>
</div>

@endsection