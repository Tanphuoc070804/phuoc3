@extends('layout')
@section('title','Welcome to TPshop')
@section('title2','Welcome to TPshop')
@section('content')
<div class="container pb-5">
    <form method="post">
      @csrf
      <h2 class="text-center p-3">Đăng ký</h2>
      <hr>
      <div class="row">
        <div class="col-md-6 mx-auto ">
          <div class="mb-3 pb-3">
            <label for="name" class="form-label">Họ và tên:</label>
            <input type="text" class="form-control" id="name" name="name" required>
            
          </div>
          <div class="mb-3 pb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" ng-model="email" name="email"
             required>
            
          </div>

          <div class="mb-3 pb-3">
            <label for="password" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" id="password" ng-model="password" name="password" required>
           
          </div>
          <div class="mb-3 pb-3">
            <label for="password1" class="form-label">Điền lại mật khẩu</label>
            <input type="password" class="form-control" id="password1" name="repassword" required
              >
           
          </div>
          @if(Session::has('message'))
            <div class="alert alert-danger">{{Session::get('message')}}</div>
             @php
                 Session::forget('message');
             @endphp
            @endif
          <div class="btn-group mb-2">
            <button type="submit" class="btn btn-danger ">
              <div class="spinner-border spinner-border-sm"></div>
              đăng ký
            </button>

          </div>

        </div>
      </div>
    </form>
  </div>
   @endsection