@extends('layout')
@section('title','Welcome to TPshop')
@section('title2','Welcome to TPshop')
@section('content')
<div class="container">
    <div class="row">
        <h3>Tin tức</h3>
            <div ng-repeat="tt in dsTT" class="col-md-3">
                <div class="card shadow border-0 hover-trigger">
                    <div class="position-relative">
                        
                        <img src="img/new1.jpg" style="height: 200px;" class="card-img-top">
                        <a href="#!news"
                            class="show-hover btn btn-light position-absolute end-0 bottom-0 rounded-pill mb-3 me-3">
                            chi tiết</a>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Cách khử mùi hôi giày hiệu quả</h5>
                        <div class="text-warning mb-3 mt-4 d-flex align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span class="text-dark ms-2">1</span>
                        </div>
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="" ng-click="showTinTuc(tt)">xem them</a>
                    </div>
                </div>
            </div>
            <div ng-repeat="tt in dsTT" class="col-md-3">
                <div class="card shadow border-0 hover-trigger">
                    <div class="position-relative">
                        
                        <img src="img/new1.jpg" style="height: 200px;" class="card-img-top">
                        <a href="#!news"
                            class="show-hover btn btn-light position-absolute end-0 bottom-0 rounded-pill mb-3 me-3">
                            chi tiết</a>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Cách khử mùi hôi giày hiệu quả</h5>
                        <div class="text-warning mb-3 mt-4 d-flex align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span class="text-dark ms-2">1</span>
                        </div>
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="" ng-click="showTinTuc(tt)">xem them</a>
                    </div>
                </div>
            </div>
            <div ng-repeat="tt in dsTT" class="col-md-3">
                <div class="card shadow border-0 hover-trigger">
                    <div class="position-relative">
                        
                        <img src="img/new1.jpg" style="height: 200px;" class="card-img-top">
                        <a href="#!news"
                            class="show-hover btn btn-light position-absolute end-0 bottom-0 rounded-pill mb-3 me-3">
                            chi tiết</a>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Cách khử mùi hôi giày hiệu quả</h5>
                        <div class="text-warning mb-3 mt-4 d-flex align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span class="text-dark ms-2">1</span>
                        </div>
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="" ng-click="showTinTuc(tt)">xem them</a>
                    </div>
                </div>
            </div>
            <div ng-repeat="tt in dsTT" class="col-md-3">
                <div class="card shadow border-0 hover-trigger">
                    <div class="position-relative">
                        
                        <img src="img/new1.jpg" style="height: 200px;" class="card-img-top">
                        <a href="#!news"
                            class="show-hover btn btn-light position-absolute end-0 bottom-0 rounded-pill mb-3 me-3">
                            chi tiết</a>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Cách khử mùi hôi giày hiệu quả</h5>
                        <div class="text-warning mb-3 mt-4 d-flex align-items-center">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span class="text-dark ms-2">1</span>
                        </div>
                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="" ng-click="showTinTuc(tt)">xem them</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-4">
          <h3>Có thể bạn chưa biết</h3>
              <div ng-repeat="tt in dsTT" class="col-md-3">
                  <div class="card shadow border-0 hover-trigger">
                      <div class="position-relative">
                          
                          <img src="img/new1.jpg" style="height: 200px;" class="card-img-top">
                          <a href="#!news"
                              class="show-hover btn btn-light position-absolute end-0 bottom-0 rounded-pill mb-3 me-3">
                              chi tiết</a>
                      </div>
  
                      <div class="card-body">
                          <h5 class="card-title">Cách khử mùi hôi giày hiệu quả</h5>
                          <div class="text-warning mb-3 mt-4 d-flex align-items-center">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <span class="text-dark ms-2">32312</span>
                          </div>
                          <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="" ng-click="showTinTuc(tt)">xem them</a>
                      </div>
                  </div>
              </div>
              <div ng-repeat="tt in dsTT" class="col-md-3">
                  <div class="card shadow border-0 hover-trigger">
                      <div class="position-relative">
                          
                          <img src="img/new1.jpg" style="height: 200px;" class="card-img-top">
                          <a href="#!news"
                              class="show-hover btn btn-light position-absolute end-0 bottom-0 rounded-pill mb-3 me-3">
                              chi tiết</a>
                      </div>
  
                      <div class="card-body">
                          <h5 class="card-title">Cách khử mùi hôi giày hiệu quả</h5>
                          <div class="text-warning mb-3 mt-4 d-flex align-items-center">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <span class="text-dark ms-2">32312</span>
                          </div>
                          <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="" ng-click="showTinTuc(tt)">xem them</a>
                      </div>
                  </div>
              </div>
              <div ng-repeat="tt in dsTT" class="col-md-3">
                  <div class="card shadow border-0 hover-trigger">
                      <div class="position-relative">
                          
                          <img src="img/new1.jpg" style="height: 200px;" class="card-img-top">
                          <a href="#!news"
                              class="show-hover btn btn-light position-absolute end-0 bottom-0 rounded-pill mb-3 me-3">
                              chi tiết</a>
                      </div>
  
                      <div class="card-body">
                          <h5 class="card-title">Cách khử mùi hôi giày hiệu quả</h5>
                          <div class="text-warning mb-3 mt-4 d-flex align-items-center">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <span class="text-dark ms-2">32312</span>
                          </div>
                          <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="" ng-click="showTinTuc(tt)">xem them</a>
                      </div>
                  </div>
              </div>
              <div ng-repeat="tt in dsTT" class="col-md-3">
                  <div class="card shadow border-0 hover-trigger">
                      <div class="position-relative">
                          
                          <img src="img/new1.jpg" style="height: 200px;" class="card-img-top">
                          <a href="#!news"
                              class="show-hover btn btn-light position-absolute end-0 bottom-0 rounded-pill mb-3 me-3">
                              chi tiết</a>
                      </div>
  
                      <div class="card-body">
                          <h5 class="card-title">Cách khử mùi hôi giày hiệu quả</h5>
                          <div class="text-warning mb-3 mt-4 d-flex align-items-center">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <span class="text-dark ms-2">32312</span>
                          </div>
                          <a data-bs-toggle="modal" data-bs-target="#exampleModal" href="" ng-click="showTinTuc(tt)">xem them</a>
                      </div>
                  </div>
              </div>
          </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content p-3">
            <div class="modal-header border-0">
                <h1 class="modal-title fs-3" id="exampleModalLabel">đâsd</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">đâsd</div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
   @endsection