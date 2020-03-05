<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Session;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.s
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::orderBy("created_at","desc")->paginate(8);
        // dd($products);
        return view('layouts.index',compact('categories','products'));
    }
         
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function getProductbyCategory($category_id,Request $request){
        $categories = Category::all();
        $products = Product::where("category_id", $category_id)->paginate(20);
        return view('layouts.index',compact("categories","products"));
    }
    public function getProductDetail($id,Request $request){
        $categories = Category::all();
        $product = Product::where("id", $id)->first();
        return view('layouts.productdetail',compact('categories','product'));
    }
    public function getCart(){
        $categories = Category::all();
        $products = \Cart::content();
        $total = 0;
        foreach($products as $p){
            $total = $total + $p->options->promotion_price * $p->qty;
        }

        return view('layouts.cart',compact("categories", "products", "total"));
    }
    public function addToCart($id, Request $request) {
        $product = Product::find($id);
        if ($product) {
            \Cart::add([
                'id' => $id,
                'name' => $product->name,
                'qty' => 1,
                'price' =>$product->price,
                'weight' => 0,
                'options' => [
                    'image' => $product->image,
                    'cat_name' => $product->category->name,
                    'promotion_price'=> $product->price -  $product->price * $product->sale / 100
                ]
            ]);
        }

        session()->flash("success","This product has been add to the cart");
        return redirect()->back();
    }
    public function updateCart($id,Request $request){
        // $product = Product::find($id);
        // $quantity = $request->quantity;
        // \Cart::update($product,['qty' => $quantity]);

        return redirect()->back();
    }
      public function removeFromCart($id, Request $request) {
        \Cart::remove($id);
        return redirect()->back();
    }
    /**
     * Store a newly created resource in storage.P
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
