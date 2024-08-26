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
<div class="container2">
        <section>
            <form>
                <label for="product_name">Tên sản phẩm:</label><br>
                <input type="text" id="product_name" name="product_name"><br>
                
                <label for="product_price">Giá:</label><br>
                <input type="text" id="product_price" name="product_price"><br>
                
                <label for="product_image">Hình ảnh:</label><br>
                <input type="file" id="product_image" name="product_image"><br>
                
                <input type="submit" value="Cập nhật">
            </form>
        </section>
    </div>
    </div>
    
@endsection