@extends('layout')
@section('title','Welcome to TPshop')
@section('title2','Welcome to TPshop')
@section('content')
<div class="container py-5">
  <h2 class="text-center p-3">Đăng nhập</h2> <hr>
  <form action="{{ route('login') }}" method="post">
    @csrf
    <div class="row">
      <div class="col-md-6 mx-auto ">
        <div class="mb-3 pb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3 pb-3">
          <label for="password" class="form-label">Mật khẩu</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-4">
          Bạn chưa có tài khoản <a href="register.html">Đăng ký ngay!</a>
        </div>
        <div class="mb-4">
          <a href="forgotpass.html">Quên mật khẩu!</a>
        </div>

        <div class="btn-group mb-2 pb-3">
          @if($errors->any())
          <div class="alert alert-danger">
              {{ $errors->first() }}
          </div>
          @endif
          <button type="submit" class="btn btn-danger">
            <div class="spinner-border spinner-border-sm"></div>
            Đăng nhập
          </button>
          <hr>

        </div>

      </div>
    </div>
  </form>
</div>
@endsection 
