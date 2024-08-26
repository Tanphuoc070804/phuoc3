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
        <div class="row">
            <div class="col-md-3 py-4">
            <h2>Thêm Mới</h2>
            <form>
                <input type="text" placeholder="Tên">
                <input type="text" placeholder="Email">
                <input type="submit" value="Thêm">
            </form>
            </div>

            <div class="col-md-9 py-4">
            <h2>Danh Sách</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Thao tác</th> <!-- Thêm cột mới -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Văn Tấn Phước</td>
                        <td>tanphuoc0708@gmail.com</td>
                        <td class="action-icons">
                            <a href="#"><i class="fas fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Văn Tấn Khải</td>
                        <td>tanphuoc2707@gmail.com</td>
                        <td class="action-icons">
                            <a href="#"><i class="fas fa-edit"></i></a>
                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <!-- Các hàng khác -->
                </tbody>
            </table>
            </div>
        </div>

    </div>
@endsection
