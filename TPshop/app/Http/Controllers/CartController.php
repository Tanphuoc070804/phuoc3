<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function cart(){
        // session()->forget('cart');
        return view('product.cart');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // kiem tra co gio hang chua
        if(is_null(session('cart')) ){
            session()->put('cart', []);
        }
        $inCart = false; // gia su chua co san pham trong gio hang
        foreach (session('cart') as $sp) {
             // da co san pham trong gio hang -> tang so luong
            if($sp->id == $request->product_id){
                $sp->quantity += $request->quantity;
                $inCart = true;
                break;
            }
        }

        if( !$inCart ){// chua co san pham trong gio hang -> them san pham vao
            $sp = Product::find($request->product_id);
            $sp->quantity = $request->quantity;
            session()->push('cart', $sp);
        }
        $kq = [
            "status"=>true,
            "message"=>"Da them san pham vao gio hang",
            "data"=>session('cart'),

        ];
        return response()->json($kq ,200);
       

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cart = session('cart');
        session()->forget('cart');
        array_splice($cart, $id, 1);
        session()->put('cart', $cart);
        $kq = [
            "status"=>true,
            "message"=>"Da xoa san pham khoi gio hang",
            "data"=>session('cart'),

        ];
        return response()->json($kq ,200);
    }
}
