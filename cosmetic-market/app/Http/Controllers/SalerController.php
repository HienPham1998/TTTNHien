<?php

namespace App\Http\Controllers;

use App\CategoryType;
use App\Bill;
use App\BillDetail;
use App\Category;
use App\Charts\SampleChart;
use App\Product;
use App\Saler;
use App\User;
use Auth;
use Carbon\Carbon;
use DateInterval;
use DatePeriod;
use DateTime;
use Illuminate\Http\Request;

class SalerController extends Controller
{
    public function index()
    {
        $salers = Saler::orderBy("created_at", "desc")->paginate(10);
        return view('admin.salers.index', compact("salers"));
    }

    public function update(Request $request, $id)
    {
        $salers = Saler::find($id);
        $salers->firstname = $request->firstname;
        $salers->lastname = $request->lastname;
        $salers->email = $request->email;
        $salers->phone = $request->phone;
        $salers->save();
        session()->flash("success", "Update Successfully");
        return back();
    }

    public function destroy($id, Request $request)
    {
        $salers = Saler::find($id);
        $salers->delete();
        session()->flash("success", "Delete successfully");
        return back();
    }

    public function getListPending()
    {
        $user = User::find(Auth::user()->id);
        $saler = Saler::where("user_id", Auth::user()->id)->first();
        $product = Product::where("saler_id", $saler->id)->paginate(20);
        $billDetail = BillDetail::all();
        $collections = collect([]);
        $listData = collect([]);
        foreach ($product as $prod) {
            $collections->push($prod);
        }
        foreach ($collections as $coll) {
            foreach ($billDetail as $bill) {
                if ($coll->id == $bill->product_id) {
                    $listData->push($bill);
                }
            }
        }
        return view('salers.manage-order', compact('listData', 'user'));
    }

    public function getHistory()
    {
        $user = User::find(Auth::user()->id);
        $saler = Saler::where("user_id", Auth::user()->id)->first();
        $product = Product::where("saler_id", $saler->id)->paginate(20);
        $billDetail = BillDetail::all();
        $collections = collect([]);
        $listData = collect([]);
        foreach ($product as $prod) {
            $collections->push($prod);
        }
        foreach ($collections as $coll) {
            foreach ($billDetail as $bill) {
                if ($coll->id == $bill->product_id) {
                    $listData->push($bill);
                }
            }
        }
        return view('salers.history', compact('user', 'listData'));
    }

    public function changeStatusOrder($id)
    {
        $bill = BillDetail::find($id);
        $bill->status = 1;
        $bill->save();
        return redirect('/profile/list');
    }

    public function rejectOrder($id)
    {
        $bill = BillDetail::find($id);
        $bill->delete();
        return redirect('/profile/list');
    }

    public function getProduct(Request $request)
    {
        $categories = Category::all();
        $user = User::find(Auth::user()->id);
        $saler = Saler::where('user_id', Auth::user()->id)->first();
        // dd($saler);
        $product = Product::where('saler_id', $saler->id)->paginate(6);
        // dd($product);
        return view('salers.index', compact("product", "user","categories"));
    }
    public function statisticIndex(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $data = collect([]); // Could also be an array
        $labels = collect([]);
        $week = collect([]);
        $day = collect([]);
        $month = collect([]);
        $saler = Saler::where('user_id', Auth::user()->id)->first();
        $products = Product::where('saler_id', $saler->id)->get();
        if ($request->from_date && $request->to_date) {
            $begin = new DateTime($request->from_date);
            $end = new DateTime($request->to_date);
            $interval = DateInterval::createFromDateString('1 day');
            $period = new DatePeriod($begin, $interval, $end);
            foreach ($period as $dt) {
                $b = collect([]);
                $val = 0;
                $full_date = $dt->format("Y-m-d");
                $date = $dt->format("d/m");
                $labels->push($date);
                foreach ($products as $prod) {
                    $billDetail = BillDetail::withTrashed()
                        ->where('product_id', $prod->id)
                        ->whereRaw('date(created_at) = ?', [date($full_date)])->get();
                    $b->push($billDetail->count());
                }
                foreach ($b as $key => $item) {
                    if ($item != '[]') {
                        $val += $b[$key];
                    }
                }
                $data->push($val);
            }
        } else {
            $labels = collect(['Today', 'Week', 'Month']);
            foreach ($products as $prod) {
                $b_day = BillDetail::withTrashed()
                    ->where('product_id', $prod->id)
                    ->whereDate('created_at', Carbon::today())->get();
                foreach ($b_day as $item) {
                    if ($item != '[]') {
                        $day->push($b_day->count());
                    }
                }
            }
            $data->push($day->count());
            foreach ($products as $prod) {
                $b_week = BillDetail::withTrashed()
                    ->where('product_id', $prod->id)
                    ->whereBetween('created_at',
                        [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
                foreach ($b_week as $item) {
                    if ($item != '[]') {
                        $week->push($b_week->count());
                    }
                }
            }
            $data->push($week->count());
            foreach ($products as $prod) {
                $b_month = BillDetail::withTrashed()
                    ->where('product_id', $prod->id)
                    ->whereBetween('created_at',
                        [Carbon::today()->startOfMonth(), Carbon::today()->endOfMonth()])->get();
                foreach ($b_month as $item) {
                    if ($item != '[]') {
                        $month->push($b_month->count());
                    }
                }
            }
            $data->push($month->count());
        }

        $chart = new SampleChart;
        $chart->labels($labels);
        $chart->dataset('Total Bill', 'bar', $data);

        return view("salers.statistic", compact("chart", "user"));
    }
    public function productStatistic(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $data = collect([]); // Could also be an array
        $labels = collect([]);
        $week = collect([]);
        $day = collect([]);
        $month = collect([]);
        $saler = Saler::where('user_id', Auth::user()->id)->first();
        $products = Product::where('saler_id', $saler->id)->get();
        if ($request->from_date && $request->to_date) {
            $begin = new DateTime($request->from_date);
            $end = new DateTime($request->to_date);
            $interval = DateInterval::createFromDateString('1 day');
            $period = new DatePeriod($begin, $interval, $end);
            foreach ($period as $dt) {
                $b = collect([]);
                $val = 0;
                $full_date = $dt->format("Y-m-d");
                $date = $dt->format("d/m");
                $labels->push($date);
                foreach ($products as $prod) {
                    $billDetail = BillDetail::withTrashed()
                        ->where('product_id', $prod->id)
                        ->whereRaw('date(created_at) = ?', [date($full_date)])->get();
                    foreach ($billDetail as $bd) {
                        $b->push($bd);
                    }
                }
                foreach ($b as $key => $item) {
                    if ($item != '[]') {
                        $val += $item->quantity;
                    }
                }
                $data->push($val);
            }
        } else {
            $val = 0;
            $labels = collect(['Today', 'Week', 'Month']);
            foreach ($products as $prod) {
                $b_day = BillDetail::withTrashed()
                    ->where('product_id', $prod->id)
                    ->whereDate('created_at', Carbon::today())->get();
                foreach ($b_day as $item) {
                    if ($item != '[]') {
                        $val += $item->quantity;
                    }
                }
            }
            $data->push($val);
            foreach ($products as $prod) {
                $b_week = BillDetail::withTrashed()
                    ->where('product_id', $prod->id)
                    ->whereBetween('created_at',
                        [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
                foreach ($b_week as $item) {
                    if ($item != '[]') {
                        $val += $item->quantity;
                    }
                }
            }
            $data->push($val);

            foreach ($products as $prod) {
                $b_month = BillDetail::withTrashed()
                    ->where('product_id', $prod->id)
                    ->whereBetween('created_at',
                        [Carbon::today()->startOfMonth(), Carbon::today()->endOfMonth()])->get();
                foreach ($b_month as $item) {
                    if ($item != '[]') {
                        $val += $item->quantity;
                    }
                }
            }
            $data->push($val);

        }

        $chart = new SampleChart;
        $chart->labels($labels);
        $chart->dataset('Total products', 'line', $data);

        return view("salers.statistic", compact("chart", "user"));
    }

    function goToShop($id, Request $request){
          $categories = CategoryType::all();
          $saler = Saler::find($id);
          $products = Product::where("saler_id",$id)->paginate(16);
           return view('salers.shop', compact('categories', 'products','saler'));
    }

}
