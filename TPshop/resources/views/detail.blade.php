@extends('layout')
@section('title','Welcome to TPshop')
@section('title2','Welcome to TPshop')
@section('content')
<div class="container py-4">
     <h1>
      Chi tiết sản phẩm
    </h1>
    <div class="card p-3 mt-3" repeat="pd in dsPD" >
      <div class="row">
        <!--DETAIL-->
        <div class="col-sm-9">
          <div class="row">
            <img src="{{asset('/')}}img/{{$sp->img}}" class="col-sm-4">
            <ul class="col-sm-8" >
              
              <li>Tên hàng: {{$sp->name}}</span></li>
              <li>Đơn giá: {{ number_format($sp->price, 0, '.', ',') }} <u>VND</u></li>
              <li>Nhà cung cấp: Nike</li>
              <li>Chủng loại: Giày</li>
              <li>Số lượng còn {{$sp->quantity}} đôi</li>
              <li>Đã bán {{$sp->sold}} đôi</li>
              <li>Giảm giá: <span class="badge bg-danger badge-sm">5%</span></button></li>
             <div class="row">
              <div class=" col-6 p-4">
                <input type="number" class="form-control form-control"
                value="1" min="1" max="{{$sp->quantity}}" ng-model="quantity">
              </div>
              <div class=" col-6 p-4">
                <button type="submit" class="btn btn-outline-danger " ng-click="addToCart({{$sp->id}}, quantity)">
                  Thêm vào giỏ hàng
                </button>
              </div>
             </div>
              
            </ul>
            
          </div>
          <div class="row">
            <fieldset>
              <legend class="p-3">Hàng liên quan</legend> <hr>
              @foreach ( $splq as $sp )
                <img class="imgs-thumbnail" src="{{asset('/')}}img/{{$sp->img}}"  />
              @endforeach
            </fieldset>
            
          </div>
        </div>
      

    
      <aside class="col-sm-3">
        <div class="poly-cart">
          
            <div class="card p-2">
              <div class="row">
                <img class="col-sm-5" src="img/cart.jpg" style="width: 100px; height: 100px;">
              <ul class="col-sm-7 list-unstyled">
                <li>Còn 78 sản phẩm</li>
                <li style="padding: 5px;">150.000 VNĐ</li>
                <button style="border-radius: 5px; color: white; background-color: red;">Giỏ hàng</button>
              </ul>
              </div>
            
            </div>
          
          </div>
          <div class="px-0 p-2">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Tìm kiếm" aria-label="Tìm kiếm" aria-describedby="button-addon2">
              <button class="btn btn-light" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
            </div>
          </div>
                      <!-- ACCORDION -->
          
          <div class="accordion py-1" id="accordionExample">
            <div class="accordion-item">
              <div class="list-group">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed list-group-item list-group-item:action bg-light border-bottom" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <span class="fa-solid fa-list"></span>
                    <strong >Chủng loại</strong>
                  
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="m-0">
                    <a href="" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 border-bottom">Giày <span class="badge bg-secondary badge-sm align-self-center">78</span></a>
                    <a href="" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 border-bottom">Dép <span class="badge bg-secondary badge-sm align-self-center">87</span></a>
                    <a href="" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 border-bottom">Nón <span class="badge bg-secondary badge-sm align-self-center">14</span></a>
                    <a href="" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center border-0 border-bottom">Áo <span class="badge bg-secondary badge-sm align-self-center">41</span></a>
                  </div>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="accordion py-1" id="accordionExample">
            <div class="accordion-item">
              <div class="list-group">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed list-group-item list-group-item:action bg-light border-bottom" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <span class="fa-solid fa-city"></span>
                    <strong >Nhà cung cấp</strong>
                  
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="m-0">
                    <a href="" class="list-group-item list-group-item:action border-0 border-bottom">Nike</a>
                  <a href="" class="list-group-item list-group-item:action border-0 border-bottom">Adidas</a>
                  <a href="" class="list-group-item list-group-item:action border-0 border-bottom">Mizuno</a>
                  <a href="" class="list-group-item list-group-item:action border-0 border-bottom">Puma</a>
                  </div>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="accordion py-1" id="accordionExample">
            <div class="accordion-item">
              <div class="list-group">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed list-group-item list-group-item:action bg-light border-bottom" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <span class="fa-regular fa-star"></span>
                    <strong >Hàng đặt biệt</strong>
                  
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="m-0">
                    <a href="" class="list-group-item list-group-item:action border-0 border-bottom">Hàng bán chạy</a>
                  <a href="" class="list-group-item list-group-item:action border-0 border-bottom">Hàng mới</a>
                  <a href="" class="list-group-item list-group-item:action border-0 border-bottom">Hàng giảm giá</a>
                  <a href="" class="list-group-item list-group-item:action border-0 border-bottom">Hàng đặc biệt</a>
                  <a href="" class="list-group-item list-group-item:action border-0 border-bottom">Hàng xem nhiều</a>

                  </div>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          
        
          
      </aside>
    </div>
      <div class="row p-3">
        <h2 class="p-3 bg-danger">Chi tiết sản phẩm</h2>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black mb-2">Thương hiệu: Nike</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black mb-2">Chất liệu: Canvas, da, caosu</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black mb-2">Xuất sứ: Việt nam</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black mb-2">Trọng lượng: 300g</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-black mb-2">Gửi từ: Phan thiết</a></li>
      </ul>
      <h2 class="p-3 bg-danger">Mô tả sản phẩm</h2>
      <p>HƯỚNG DÂN BẢO QUẢN SẢN PHẨM:</p>
      <p> Không dùng hóa chất hay bột giặt có hoạt tính tẩy rửa mạnh </p>
      <p> Không dùng bàn chải cứng để vệ sinh giày sẽ làm hư vải hoặc da</p>
      <p>Tránh phơi giày trực tiếp dưới trời nắng gắt</p>
      <p>Không để giày ở những nơi ẩm mốc, tránh đi mưa hoặc ngâm nocws trong thời gian dài.</p>
      <p>LƯU Ý:</p>
      <p>- Màu của giày thể thao sneaker nam nữ có thể sẽ chênh lệch thực tế một phần nhỏ, do ảnh hưởng về độ lệch màu của ánh sáng nhưng vẫn đảm bảo chất lượng</p>
      <p>- Shop chỉ giải quyết những khiếu nại của khách hàng khi có bằng chứng rõ ràng (Quay video khi nhận hàng bóc hàng, phiếu giao hàng của bên shop..)</p>
      <p>- Quý khách vui lòng đọc kỹ thông tin sản phẩm rồi quyết định mua hàng, chứ đừng đặt cho vui hoặc từ chối khi đã mua hàng, tội nghiệp shop và các bạn giao hàng lắm ạ ^^</p>
      </div>
    </div>
  </div>
   @endsection