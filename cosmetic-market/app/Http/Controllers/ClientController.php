<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\User;
use App\Shippingaddress;
use Auth;
use App\Saler;
use Redirect; 
use Session;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.s
     *
     * @return \Illuminate\Http\Response
     */
    
     public function postSaler(Request $request){
    $rules=[
        'firstname'=> 'required',
        'lastname'=> 'required',
        'email'=> 'required',
        'phone'=> 'required',
     ];

      $validator = Validator::make($request->all(), $rules);
     
     if ($validator->fails()) {
         return redirect()->back()->withErrors($validator)->withInput();
     }
        $currentUser = Auth::user()->id;
        $newSaler = new Saler();
        $newSaler->user_id = Auth::user()->id;
        $newSaler->firstname = $request->firstname;
        $newSaler->lastname = $request->lastname;
        $newSaler->email = $request->email;
        $newSaler->phone = $request->phone;
        $newSaler->save();
     
        return redirect('/profile');
     
    }

    public function registerStore(){
        $categories = Category::all();
        return view('layouts.registerStore',compact('categories'));
    }

    public function getUpdateProfile(){
        return view('layouts.postProfile');
    }

    public function postUpdateProfile(Request $request){
    //     $rules=[
    //     'firstname'=> 'required',
    //     'lastname'=> 'required',
    //     'email'=> 'required',
    //     'phone'=> 'required',
    //  ];
    }

     public function postProduct(){
        $categories = Category::all();
        return view('layouts.postProduct',compact('categories'));
    }

    public function index()
    {
        $categories = Category::all();
        $products = Product::orderBy("created_at","desc")->paginate(16);
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
      public function addAddress(Request $request){
        $shippingaddress = new Shippingaddress();
        $shippingaddress->name = $request->name;
        $shippingaddress->email = $request->email;
        $shippingaddress->phone = $request->phone;
        $shippingaddress->address = $request->address;
        $shippingaddress->customer_id =  1;
        $shippingaddress->save();
        return redirect("/bill/1");
    }
    public function getBill($customer_id,Request $request){
        $categories = Category::all();
        $shippingaddress = Shippingaddress::where("customer_id",$customer_id)->orderBy("created_at", "desc")->first();
        $products = \Cart::content();
        $total = 0;
        foreach($products as $p){
            $total = $total + $p->options->promotion_price * $p->qty;
        }
        return view('layouts.bill',compact('categories','shippingaddress','products','total'));
    }
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
