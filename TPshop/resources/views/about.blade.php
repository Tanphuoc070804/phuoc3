@extends('layout')
@section('title','Welcome to TPshop')
@section('title2','Welcome to TPshop')
@section('content')
<div class="container">
  <!-- Phần Giới Thiệu -->
<section class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <h1>Về Chúng Tôi</h1>
            <p class="lead">Chúng tôi là cửa hàng giày uy tín, mang đến những sản phẩm chất lượng và dịch vụ tốt nhất cho khách hàng.</p>
            <p>Được thành lập từ năm 2024, Shop Giày không ngừng phát triển và mở rộng để phục vụ nhu cầu của mọi khách hàng. Chúng tôi cam kết cung cấp những sản phẩm chính hãng, mẫu mã đa dạng và phong cách thời trang mới nhất.</p>
            <p>Sự hài lòng của khách hàng là ưu tiên hàng đầu của chúng tôi. Đội ngũ nhân viên chuyên nghiệp, nhiệt tình và thân thiện luôn sẵn sàng hỗ trợ bạn tìm kiếm sản phẩm phù hợp nhất.</p>
        </div>
        <div class="col-lg-6">
            <img src="img/nv.jpg" class="img-fluid" alt="Hình Ảnh Cửa Hàng">
        </div>
    </div>
</section>

<!-- Phần Đội Ngũ -->
<section class="container mt-5">
    <div class="text-center mb-5">
        <h2>Đội Ngũ Của Chúng Tôi</h2>
        <p class="lead">Chúng tôi tự hào về đội ngũ nhân viên giàu kinh nghiệm và nhiệt huyết.</p>
    </div>
    <div class="row">
        <!-- Thành viên 1 -->
        <div class="col-lg-4 text-center">
            <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="Thành viên 1">
            <h5>Nguyễn Văn A</h5>
            <p class="text-muted">Giám Đốc</p>
            <p>Ông A có hơn 20 năm kinh nghiệm trong ngành và là người dẫn dắt, định hướng phát triển của cửa hàng.</p>
        </div>
        <!-- Thành viên 2 -->
        <div class="col-lg-4 text-center">
            <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="Thành viên 2">
            <h5>Trần Thị B</h5>
            <p class="text-muted">Trưởng Phòng Kinh Doanh</p>
            <p>Bà B là chuyên gia trong lĩnh vực kinh doanh, luôn tìm kiếm những cơ hội mới để mở rộng thị trường.</p>
        </div>
        <!-- Thành viên 3 -->
        <div class="col-lg-4 text-center">
            <img src="https://via.placeholder.com/150" class="rounded-circle mb-3" alt="Thành viên 3">
            <h5>Phạm Văn C</h5>
            <p class="text-muted">Trưởng Phòng Kỹ Thuật</p>
            <p>Ông C đảm bảo rằng mọi sản phẩm đều đạt chất lượng cao nhất trước khi đến tay khách hàng.</p>
        </div>
    </div>
</section>
   </div>
   @endsection