@extends('layout')
@section('title','Welcome to TPshop')
@section('title2','Welcome to TPshop')
@section('content')
<div class="container">
    <form  ng-submit="login()" name="frmDangNhap">
 
   <h2 class="text-center p-3">Lấy lại mật khẩu</h2> 
   <hr>
   <div class="row">
     <div class="col-md-6 mx-auto ">
     <div class="mb-3">
       <label for="email" class="form-label">Vui lòng nhập Email khi đăng ký tài khoản!</label>
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
  
  
     <div class="mb-4">
       Bạn chưa có tài khoản <a href="#!register">Đăng ký ngay!</a>
     </div>
   <div class="btn-group mb-2">
       <button type="submit" class="btn btn-danger ">
      
       Tạo mật khẩu mới</button>
       
   </div>
   
     </div>
   </div>
   
   
 </form>
 </div>
   @endsection