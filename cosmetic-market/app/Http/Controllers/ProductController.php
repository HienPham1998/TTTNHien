<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Image;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::orderBy("created_at", "desc")->paginate(10);
        return view('salers.index', compact("product"));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->sale = $request->sale;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $filename = time() . '.' . $img->getClientOriginalExtension();

            Image::make($img)->resize(500, 500)->save(public_path('/client/assets/image' . $filename));
            $product->image = '/client/assets/image' . $filename;

        }
        // dd($product);
        $product->save();
        session()->flash("success", "Update Successfully");
        return back();
    }

    public function destroy($id, Request $request)
    {
        $product = Product::find($id);
        $product->delete();
        session()->flash("success", "Delete successfully");
        return back();
    }

    public function add(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->sale = $request->sale;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $filename = time() . '.' . $img->getClientOriginalExtension();

            Image::make($img)->resize(500, 500)->save(public_path('/client/assets/image' . $filename));
            $product->image = '/client/assets/image' . $filename;

        }
        $product->save();
        session()->flash("success", "Add product successfully");
        return back();
    }
}
