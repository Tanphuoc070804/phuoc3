@extends('layout')
@section('title','Welcome to TPshop')
@section('title2','Welcome to TPshop')
@section('content')
<div class="container">
    <div class=" border rounded-top px-4 py-3 bg-light text-black">
      <h4><i class="fa-solid fa-pen-to-square"></i> cập nhật tài khoản</h4>
    </div>
    <form class="border  p-4 fw-bold needs-validation" ng-submit="login()" name="frmDangNhap">
      <div class="row">
        <div class="form-group col-sm-6 mb-3 pb-3">
          <label for="email" class="form-label"><i class="fa-regular fa-envelope"></i> Email</label>
          <input type="email" class="form-control" id="email" ng-model="email" name="email"
          pattern="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$" required>
          <div class="alert alert-warning" ng-show="frmDangNhap.email.$invalid && frmDangNhap.email.$dirty"  >
            Email phải có @.Com
        </div>
        </div>
        <div class="form-group col-sm-6">
          <label for="hoten" class="form-label"><i class="fa-solid fa-pen"></i> Họ và tên</label>
          <input type="text" class="form-control" id="hoten" ng-model="hoten" name="hoten" required>
          <div class="alert alert-warning" ng-show="frmDangNhap.hoten.$invalid && frmDangNhap.hoten.$dirty"  >
            Vui lòng điền đầy đủ thông tin
        </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-sm-6 mb-3">
          <label class="mb-2" for=""><i class="fa-solid fa-genderless"></i> Giới tính:</label>
          <select class="form-select" id="form-control" required>
            <option value="">...</option>
            <option>Nam</option>
            <option>Nữ</option>
            <option>Giới tính thứ 3</option>
          </select>
          <div class="valid-feedback">
            looks good
          </div>
          <div class="invalid-feedback">
            Vui lòng chọn
          </div>


        </div>

        <div class="form-group col-sm-6 mb-3">
          <label class="mb-2" for=""><i class="fa-solid fa-phone"></i> Số điện thoại:</label>
          <input type="number" class="form-control" id="number" ng-model="number" name="number" required>
          <div class="alert alert-warning" ng-show="frmDangNhap.number.$invalid && frmDangNhap.number.$dirty"  >
            Vui lòng nhập đúng số điện thoại
        </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-sm-6 mb-3">
          <label class="mb-2" for=""><i class="fa-solid fa-person-dress"></i> Địa chỉ giao hàng:</label>
          <input type="text" class="form-control" required>
          <div class="valid-feedback">
            looks good
          </div>
          <div class="invalid-feedback">
            Không được bỏ trống
          </div>
        </div>
        <div class="mb-3 form-group col-sm-6">
          <label for="password" class="form-label">Cập nhật mật khẩu mới</label>
          <input type="password" class="form-control" id="password" ng-model="password" name="password" required
            pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$">
          <div class="alert alert-warning" ng-show="frmDangNhap.password.$invalid && frmDangNhap.password.$dirty"  >
            Mật khẩu phải có ít nhất 8 kí tự. 1 kí tự HOA, 1 kí tự ĐẶC BIỆT và 1 kí tự SỐ.

        </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-sm-5 mb-3">
          <label for="fileInput" class="form-label">Chọn ảnh:</label>
          <input type="file" class="form-control" id="fileInput">
        </div>

      </div>
      <div class="row">
        <div class="form-group col-sm-12">
          <button type="submit" class="btn btn-outline-secondary "><i class="fa-solid fa-download"></i>
            Lưu</button>
          <button type="submit" class="btn btn-outline-secondary "><i class="fa-solid fa-delete-left"></i>
            Hủy</button>

        </div>
      </div>
    </form>
  </div>
   @endsection