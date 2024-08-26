<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $product = Product::take(4)->get();
        $product1 = Product::skip(4)->take(4)->get();
        $product2 = Product::skip(8)->take(4)->get();
        return view('home',[
           'products'=> $product,
           'productbest'=> $product1,
           'productsale'=> $product2      
        ]);
    }
}
