@extends('layout')
@section('title','Welcome to TPshop')
@section('title2','Welcome to TPshop')
@section('content')
<div class="container">
    <form  ng-submit="login()" name="frmDangNhap">

      <h2 class="text-center p-3">Đổi mật khẩu</h2>
      <hr>
      <div class="row">
        <div class="col-md-6 mx-auto ">
          <div class="mb-3 pb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" ng-model="email" name="email"
            pattern="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$" required>
            <div class="alert alert-warning" ng-show="frmDangNhap.email.$invalid && frmDangNhap.email.$dirty"  >
              Email phải có @.Com
          </div>
          </div>

          <div class="mb-3">
            <label for="tendn" class="form-label">Tên đăng nhập</label>
            <input type="text" class="form-control" id="tendn" ng-model="tendn" name="tendn" required>
            <div class="alert alert-warning" ng-show="frmDangNhap.tendn.$invalid && frmDangNhap.tendn.$dirty"  >
              Vui lòng điền đầy đủ thông tin
          </div>
          </div>
          
          <div class="mb-3 pb-3">
            <label for="password" class="form-label">Mật khẩu mới</label>
            <input type="password" class="form-control" id="password" ng-model="password" name="password" required
              pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$">
            <div class="alert alert-warning" ng-show="frmDangNhap.password.$invalid && frmDangNhap.password.$dirty"  >
              Mật khẩu phải có ít nhất 8 kí tự. 1 kí tự HOA, 1 kí tự ĐẶC BIỆT và 1 kí tự SỐ.
  
          </div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nhập lại mật khẩu mới</label>
            <input type="password" class="form-control" id="exampleInputPassword1" required>
          </div>

          <div class="mb-4">
            Bạn chưa có tài khoản <a href="register.html">Đăng ký ngay!</a>
          </div>
          <div class="btn-group mb-2">
            <button type="submit" class="btn btn-danger ">

              Xác nhận đổi</button>

          </div>

        </div>
      </div>


    </form>
  </div>
   @endsection