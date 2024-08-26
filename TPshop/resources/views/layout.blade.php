<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Chỉ sử dụng một phiên bản Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('js/angular.min.js')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
</head>

<body ng-app="tcApp" ng-controller="tcCtrl">
@include('header')
<main>
    <div ng-controller="viewCtrl">
        @yield('content')
    </div> 
</main>

@include('footer')
<script src="{{asset('/')}}js/bootstrap.min.js"></script>
<script src="{{asset('/')}}js/angular.min.js"></script>
<script src="{{asset('/')}}js/tiny-slider.js"></script>
<script src="{{asset('/')}}js/glightbox.min.js"></script>
<script src="{{asset('/')}}js/main.js"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Các tệp JavaScript cần thiết -->
    <script>
        var app = angular.module('tcApp', []);
        app.controller('tcCtrl', function($scope, $http){
            $scope.cart = {!! json_encode(session('cart')) !!} || [];
            $scope.addToCart = function(product_id, quantity){
                $http.post('/api/cart',{
                    product_id: product_id,
                    quantity: quantity,
                }).then(function(res){
                    $scope.cart = res.data.data;
                });
            }
            $scope.totalCartMoney = function(){
                var total = 0;
                $scope.cart.forEach(sp => {
                    total += sp.quantity * (sp.price);
                });
                return total;
            }
            $scope.removeFromCart = function(index){
                $http.delete('/api/cart/'+index).then(function(res){
                    $scope.cart = res.data.data;
                })
            }
        });
        var viewFunction = function($scope){ };
    </script>
    @yield('viewFunction')

    <script>
        app.controller('viewCtrl', viewFunction);
    </script>

<script>
    // Dữ liệu mẫu cho biểu đồ
    const salesData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
        datasets: [{
            label: 'Sales',
            data: [1000, 1500, 1200, 1800, 2000, 1700],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    };

    // Lấy thẻ canvas và vẽ biểu đồ doanh số
    const salesChartCanvas = document.getElementById('salesChart');
    const salesChart = new Chart(salesChartCanvas, {
        type: 'line',
        data: salesData,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</body>
</html>


