<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;


use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class AdminController extends Controller
{
    public function Admin(){
        return view('admin.admin');
    }
    public function productlist(){
        $categories=category::orderBy('name','ASC')->get();
        $products=Product::orderBy('id','DESC')->paginate(10);
        return view('admin.productlist', compact('categories','products'));
    }


     

    public function productadd(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('img'), $imageName);
            $validatedData['img'] = $imageName;
        }

        $product = Product::create($validatedData);

        $categories = Category::orderBy('name', 'ASC')->get();
        $products = Product::orderBy('id', 'DESC')->paginate(10);
        return view('admin.productlist', compact('categories', 'products'));
    }
    
    public function productdelete($id) {
        $product = Product::find($id);
        if ($product) {
            $imgpath = public_path('img' . $product->img);
            if (file_exists($imgpath)) {
                unlink($imgpath);
            }
            $product->delete();
        }
        return redirect()->route('productlist')->with('success', 'Product deleted successfully.');
    }
    public function productupdateform($id){
        $categories = Category::orderBy('name', 'ASC')->get();
        $products = Product::orderBy('id', 'DESC')->paginate(10);
        $product = Product::find($id);
        return view('admin.productupdateform', compact('categories', 'products', 'product'));
    }

    public function productupdate(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'description' => 'nullable|string',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);
        
        $product = product::find($request->id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
    
        
        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('public/img');
            $product->img = basename($imagePath);
        }
    
        $product->category_id = $request->category_id;
        $product->save();
    
        return redirect()->back()->with('success', 'Product updated successfully');
    }

    public function Users(){
        return view('admin.users');
    }
    public function Updateproducts(){
        return view('admin.updateproducts');
    }
}
