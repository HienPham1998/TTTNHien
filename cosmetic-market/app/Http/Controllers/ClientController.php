<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\SalerDetail;
use App\Shippingaddress;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Redirect;
use Session;
use Validator;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.s
     *
     * @return \Illuminate\Http\Response
     */

    public function postSaler(Request $request)
    {
        $rules = [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'shopname' => 'required',
            'shopaddress' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = User::find(Auth::user()->id);
        $user->role_id = 2;
        $user->save();

        $saler_detail = new SalerDetail();
        $saler_detail->firstname = $request->firstname;
        $saler_detail->lastname = $request->lastname;
        $saler_detail->email = $request->email;
        $saler_detail->phone = $request->phone;
        $saler_detail->shopname = $request->shopname;
        $saler_detail->shopaddress = $request->shopaddress;
        $saler_detail->save();

        return redirect('/profile');

    }

    public function registerStore()
    {
        $categories = Category::all();
        return view('layouts.registerStore', compact('categories'));
    }

    public function getUpdateProfile()
    {
        return view('layouts.postProfile');
    }

    public function postUpdateProfile(Request $request)
    {
        //     $rules=[
        //     'firstname'=> 'required',
        //     'lastname'=> 'required',
        //     'email'=> 'required',
        //     'phone'=> 'required',
        //  ];
    }

    public function postProduct()
    {
        $categories = Category::all();
        return view('layouts.postProduct', compact('categories'));
    }

    public function index()
    {
        $categories = Category::all();
        $products = Product::orderBy("created_at", "desc")->paginate(16);
        // dd($products);
        return view('layouts.index', compact('categories', 'products'));
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
    public function getProductbyCategory($category_id, Request $request)
    {
        $categories = Category::all();
        $products = Product::where("category_id", $category_id)->paginate(20);
        return view('layouts.index', compact("categories", "products"));
    }
    public function getProductDetail($id, Request $request)
    {
        $categories = Category::all();
        $product = Product::where("id", $id)->first();
        return view('layouts.productdetail', compact('categories', 'product'));
    }
    public function getCart()
    {
        $categories = Category::all();
        $products = \Cart::content();
        $total = 0;
        foreach ($products as $p) {
            $total = $total + $p->options->promotion_price * $p->qty;
        }

        return view('layouts.cart', compact("categories", "products", "total"));
    }
    public function addToCart($id, Request $request)
    {
        $product = Product::find($id);
        if ($product) {
            \Cart::add([
                'id' => $id,
                'name' => $product->name,
                'qty' => 1,
                'price' => $product->unit_price,
                'weight' => 0,
                'options' => [
                    'image' => $product->image,
                    'cat_name' => $product->category->name,
                    'promotion_price' => $product->price - $product->price * $product->sale / 100,
                ],
            ]);
        }

        session()->flash("success", "This product has been add to the cart");
        return redirect()->back();
    }
    public function updateCart($id, Request $request)
    {
        // $product = Product::find($id);
        // $quantity = $request->quantity;
        // \Cart::update($product,['qty' => $quantity]);

        return redirect()->back();
    }
    public function removeFromCart($id, Request $request)
    {
        \Cart::remove($id);
        return redirect()->back();
    }
    public function addAddress(Request $request)
    {
        $shippingaddress = new Shippingaddress();
        $shippingaddress->name = $request->name;
        $shippingaddress->email = $request->email;
        $shippingaddress->phone = $request->phone;
        $shippingaddress->address = $request->address;
        $shippingaddress->bill_id = 1;
        $shippingaddress->save();
        return redirect("/bill/1");
    }
    public function getBill($bill_id, Request $request)
    {
        $categories = Category::all();
        $shippingaddress = Shippingaddress::where("bill_id", $bill_id)->orderBy("created_at", "desc")->first();
        $products = \Cart::content();
        $total = 0;
        foreach ($products as $p) {
            $total = $total + $p->options->promotion_price * $p->qty;
        }
        return view('layouts.bill', compact('categories', 'shippingaddress', 'products', 'total'));
    }

     public function postBill(Request $request, $id)
    {
          $carts = \Cart::content();
        $bill = new Bill();
        $bill->customer_id = Auth::user()->id;
        // $bill->total = \Cart::subTotal() + 2;

        $bill->save();

        foreach ($carts as $cart){
            
                $bill_detail = new Billdetail();
                $bill_detail->bill_id = $bill->id;
                $bill_detail->product_id = $cart->id; 
                $bill_detail->product_name = $cart->name;
                $bill_detail->quantity = $cart->qty;
                if($cart->options->promotion_price == 0)
                {
                    $bill_detail->price = $cart->price;
                }
                else
                    $bill_detail->price = $cart->options->promotion_price;
                $bill_detail->save();
                
                $product = Product::find($cart->id);
                if($product){
                    $product->name = $product->name;
                    $product->category_id = $product->category_id;
                    $product->provider_id = $product->provider_id;
                    $product->promotion_price = $product->promotion_price;
                    $product->unit_price = $product->unit_price;
                    $product->quantity = $product->quantity - $cart->qty;
                    $product->image = $product->image;
                    $product->description = $product->description;
                    $product->save();
                }
                else
                     return redirect()->back()->with('alert', 'Product does not exist');
            }
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
