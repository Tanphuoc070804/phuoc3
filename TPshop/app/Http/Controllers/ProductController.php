<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
    public function product(Request $request){
        $kyw=$request->input('query');
        $category_id=$request->input('category_id');
        $dsdm = category::orderBy('id','ASC')->get();

        if($request->category_id){
            $dssp = product::where('category_id', $request->category_id)->orderBy('id','DESC')->paginate(9);
        }else{
            $dssp = product::orderBy('id','DESC')->paginate(9);

        }
        
        return view('products', compact('dssp', 'dsdm','kyw','category_id'));
    }

    public function getproductsByCategories(request $request){
        $products = product::where('category_id', $request->category_id)->get();
        $categories = category::all();

        return view('products', compact('products', 'categories'));
    }

    function search(request $request){
        $dsdm=category::orderBy('name', 'ASC' )->get();
        $kyw=$request->input('query');
        $category_id=$request->input('category_id');
        $dssp=product::where('name','LIKE',"%$kyw%")
        ->orWhere('description', 'LIKE', "%$kyw%")
        ->orderBy('id','DESC')
        ->paginate(9);
        return view('products', compact('dsdm','dssp','kyw','category_id'));
    }
    function detail(Request $request){
        if($request->product_id){
            $sp=product::find($request->product_id);
            $splq=product::where('category_id', $sp->category_id)->where('id','<>',$sp->id)->get();
            return view('detail', compact('sp','splq'));
        }
        return view('detail');
    }
    }