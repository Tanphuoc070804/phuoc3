@extends('layout')
@section('title','Welcome to TPshop')
@section('title2','Welcome to TPshop')
@section('content')
<div class="container p-3">
    <h4>Giỏ hàng</h4>
    <div ng-if="cart.length>0">
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Hình ảnh</th>
                    <th>Tên</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Thành tiền</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <tr ng-repeat="sp in cart" class="align-middle">
                    <td>@{{sp.id}}</td>
                    <td>
                        <a href="/detail/@{{sp.slug}}">
                            <img src="{{asset('/')}}img/@{{sp.img}}" alt="#" class="img-fluid" style="max-width: 100px;">
                        </a>
                    </td>
                    <td><a href="/detail/@{{sp.slug}}">
                        @{{sp.name}}</a></td>
                    <td>
                        <input type="number" class="form-control form-control-lg"
                               ng-model="sp.quantity">
                    </td>
                    <td>
                        <p>@{{sp.price|number}}đ</p>
                    </td>
                    <td>
                        <p>@{{sp.quantity * (sp.price) | number}}đ</p>
                    </td>
                    <td>
                        <button class="btn btn-outline-danger">
                            <a class="remove-item text-danger" href="javascript:void(0)" ng-click=removeFromCart($index)>Xoá</i></a>
                        </button>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="">
                    <th colspan="5">Tổng thành tiền</th>
                    <th><span>@{{totalCartMoney() | number}}đ</span></th>
                    <th>
                        <button class="btn btn-outline-danger" >
                            {{-- <a class="remove-item" href="javascript:void(0)" ng-click=removeFromCart($index)>
                                <i class="fa-solid fa-trash-can"></i>
                            </a> --}}
                            <i class="fa-solid fa-trash-can"></i>
                             All
                        </button>
                    </th>
                </tr>
            </tfoot>
        </table>
        <button class="btn btn-outline-danger btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
            ĐẶT HÀNG</button>
    </div>



</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Thông tin giao hàng</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Họ tên</label>
                        <input type="text" class="form-control" id="name" ng-model="name">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Số điện thoại</label>
                        <input type="number" class="form-control" id="phone" ng-model="phone">
                    </div>
                    Tỉnh/Thành Phố
                    <select class="form-control mb-2" ng-model="tinh" ng-options="tinh.Name for tinh in dsTinh"></select>
                    Quận huyện
                    <select class="form-control mb-2" ng-model="huyen"
                        ng-options="huyen.Name for huyen in tinh.Districts"></select>
                    Phường/xã
                    <select class="form-control mb-2" ng-model="xa" ng-options="xa.Name for xa in huyen.Wards"></select>
                    <div class="mb-3">
                        <label for="address" class="form-label">Địa chỉ cụ thể</label>
                        <input type="text" class="form-control" id="address" ng-model="address">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">HỦY</button>
                <button type="button" ng-click="checkOut()" class="btn btn-primary">ĐẶT HÀNG</button>
            </div>
        </div>
    </div>
</div>
   @endsection