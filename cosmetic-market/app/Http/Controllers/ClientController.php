<?php

namespace App\Http\Controllers;

use App\Bill;
use App\BillDetail;
use App\Category;
use App\CategoryType;
use App\Product;
use App\Saler;
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

        $saler = new Saler();
        $saler->firstname = $request->firstname;
        $saler->lastname = $request->lastname;
        $saler->phone = $request->phone;
        $saler->shopname = $request->shopname;
        $saler->shopaddress = $request->shopaddress;
        $saler->user_id = $user->id;
        $saler->save();

        return redirect('/profile');

    }

    public function registerStore()
    {
        $categories = Category::all();
        return view('layouts.registerStore', compact('categories'));
    }

    public function getUpdateProfile($profile_id)
    {
        $saler = Saler::find($profile_id);
        $user = User::find(Auth::user()->id);
        return view('layouts.postProfile', compact('saler', 'user'));
    }

    public function postUpdateProfile($id, Request $request)
    {
        $rules = [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'avatar' => 'required',
        ];

        $user = User::find(Auth::user()->id);
        $user->email = $request->email;
        $user->avatar = $request->avatar;

        $user->save();

        $saler = Saler::find($id);
        $saler->firstname = $request->firstname;
        $saler->lastname = $request->lastname;
        $saler->phone = $request->phone;

        $saler->save();
        return redirect('/profile');

    }

    public function postProduct()
    {
        $categories = Category::all();
        return view('layouts.postProduct', compact('categories'));
    }
    public function index()
    {
        $categories = CategoryType::all();
        $salers = Saler::all();
        $collections = collect([]);
        foreach ($salers as $saler) {
            $products = $saler->products()->get();
            $collections->push($products);
        }
        // dd($collections);
        // $collection = $collections->paginate(8);
        $collection = $collections->all();
        return view('layouts.index', compact('categories', 'collection'));
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
        $categories = CategoryType::all();
        $products = Product::where("category_id", $category_id)->paginate(4);
        // dd($products);
        $collections = collect([]);
        foreach ($products as $p) {
            $products = $p->salers()->get();
            $products->push($p->name);
            $collections->push($products);
        }
        // dd($collections);
        // $collection = $collections->paginate(8);
        $collection = $collections->all();
        return view('layouts.index', compact("categories", "collection"));
    }
    public function getProductDetail($id, Request $request)
    {
        $categories = CategoryType::all();
        $p = Product::where("id", $id)->first();
        $product = $p->salers()->where('product_id',$id)->first();
        return view('layouts.productdetail', compact('categories', 'product','p'));
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
    public function addToCart($saler_id,$product_id,Request $request)
    {
        $saler = Saler::find($saler_id);
        $product = $saler->products()->where('product_id',$product_id)->first();
        if ($product) {
            \Cart::add([
                'id' => $product_id,
                'name' => $product->name,
                'qty' => 1,
                'price' => $product->pivot->unit_price,
                'weight' => 0,
                'options' => [
                    'image' => $product->pivot->image,
                    'cat_name' => $product->category->name,
                    'promotion_price' => $product->pivot->unit_price - $product->pivot->unit_price * $product->pivot->discount / 100,
                ],
            ]);
        }

        session()->flash("success", "This product has been add to the cart");
        return redirect()->back();
    }
    public function updateCart($id, Request $request)
    {
        $quantityUpdate = $request->quantity;
        \Cart::update($id, $quantityUpdate);
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
        $shippingaddress->user_id = Auth::user()->id;
        $shippingaddress->save();
        return redirect("/bill/" . Auth::user()->id);
    }
    public function getBill($customer_id, Request $request)
    {
        $categories = Category::all();
        $shippingaddress = Shippingaddress::where("user_id", Auth::user()->id)->orderBy("created_at", "desc")->first();
        $products = \Cart::content();
        $total = 0;
        foreach ($products as $p) {
            $total = $total + $p->options->promotion_price * $p->qty;
        }
        return view('layouts.bill', compact('categories', 'shippingaddress', 'products', 'total'));
    }

    public function postBill(Request $request)
    {
        $carts = \Cart::content();
        $bill = new Bill();
        $bill->user_id = Auth::user()->id;
        $products = \Cart::content();
        $total = 0;
        foreach ($products as $p) {
            $total = $total + $p->options->promotion_price * $p->qty;
        }
        $bill->total = $total;
        $bill->voucher_id = 1;
        $bill->transportUnit_id = 1;

        $bill->save();

        foreach ($carts as $cart) {
            $bill_detail = new Billdetail();
            $bill_detail->bill_id = $bill->id;
            $bill_detail->product_id = $cart->id;
            $bill_detail->quantity = $cart->qty;
            $bill_detail->unit_price = $cart->price;
            $bill_detail->save();
            $product = Product::find($cart->id);
            if ($product) {
                $p = $product->salers()->where('product_id',$cart->id)->first();
                // dd($p);
                $product->salers()->updateExistingPivot($cart->id, array(
                    "discount" => $p->pivot->discount,
                    "unit_price" => $p->pivot->unit_price,
                    "quantity" => $p->pivot->quantity - $cart->qty,
                    "image" => $p->pivot->image,
                    "ingredient" => $p->pivot->ingredient,
                    "manufacturing_date" => $p->pivot->manufacturing_date,
                    "expiry_date" => $p->pivot->expiry_date,
                    "description" => $p->pivot->description
                ), false);
                // $product->save();
            } else {
                return redirect()->back()->with('alert', 'Product does not exist');
            }

        }
        \Cart::destroy();
        session()->flash("success", "Order Successfully");
        return redirect('/');
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
