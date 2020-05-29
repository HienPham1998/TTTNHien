<?php

namespace App\Http\Controllers;

use App\Saler;
use App\Product;
use App\Bill;
use App\BillDetail;
use App\User;
use App\Charts\SampleChart;
use Illuminate\Support\Collection;
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

    public function getListPending(){
        $user = User::find(Auth::user()->id);
        $saler = Saler::where("user_id",Auth::user()->id)->first();
        $product = Product::where("saler_id",$saler->id)->paginate(20);
        $billDetail = BillDetail::all();
        $collections = collect([]);
        $listData = collect([]);
        foreach($product as $prod){
            $collections->push($prod);
        }
        foreach($collections as $coll){
            foreach($billDetail as $bill){
                if($coll->id == $bill->product_id){
                    $listData->push($bill);
                }
            }
        }
        return view('salers.manage-order',compact('listData','user'));
    }

    public function getHistory(){
        $user = User::find(Auth::user()->id);
        $saler = Saler::where("user_id",Auth::user()->id)->first();
        $product = Product::where("saler_id",$saler->id)->paginate(20);
        $billDetail = BillDetail::all();
        $collections = collect([]);
        $listData = collect([]);
        foreach($product as $prod){
            $collections->push($prod);
        }
        foreach($collections as $coll){
            foreach($billDetail as $bill){
                if($coll->id == $bill->product_id){
                    $listData->push($bill);
                }
            }
        }
        return view('salers.history',compact('user','listData'));
    }

    public function changeStatusOrder($id){
        $bill = BillDetail::find($id);
        $bill->status = 1;
        $bill->save();
        return redirect('/profile/list');
    }

    public function rejectOrder($id){
        $bill = BillDetail::find($id);
        $bill->delete();
        return redirect('/profile/list');
    }

    public function getProduct(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $product = Product::where('saler_id', Auth::user()->id)->paginate(20);
        // dd($product);
        return view('salers.index', compact("product","user"));
    }
    public function statisticIndex(Request $request)
    {
        $data = collect([]); // Could also be an array
        $labels = collect([]);

        if ($request->from_date && $request->to_date) {
            $begin = new DateTime($request->from_date);
            $end = new DateTime($request->to_date);

            $interval = DateInterval::createFromDateString('1 day');
            $period = new DatePeriod($begin, $interval, $end);

            foreach ($period as $dt) {
                $full_date = $dt->format("Y-m-d");
                $date = $dt->format("d/m");
                $labels->push($date);
                $data->push(Bill::withTrashed()->whereRaw('date(created_at) = ?', [date($full_date)])->sum("total"));
                // dd($date);
            }
        } else {
            $labels = collect(['Today', 'Week', 'Month']);
            $data->push(Bill::whereDate('created_at', Carbon::today())->sum("total"));
            $data->push(Bill::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum("total"));
            $data->push(Bill::whereBetween('created_at', [Carbon::today()->startOfMonth(), Carbon::today()->endOfMonth()])->sum("total"));
        }

        $chart = new SampleChart;
        $chart->labels($labels);
        $chart->dataset('Total Money', 'line', $data);

        return view("salers.statistic", compact("chart"));
    }
    public function billStatistic(Request $request)
    {
        $data = collect([]); // Could also be an array
        $labels = collect([]);

        if ($request->from_date && $request->to_date) {
            $begin = new DateTime($request->from_date);
            $end = new DateTime($request->to_date);

            $interval = DateInterval::createFromDateString('1 day');
            $period = new DatePeriod($begin, $interval, $end);

            foreach ($period as $dt) {
                $full_date = $dt->format("Y-m-d");
                $date = $dt->format("d/m");
                $labels->push($date);
                $data->push(Bill::withTrashed()->whereRaw('date(created_at) = ?', [date($full_date)])->count());
                // dd($date);
            }
        } else {
            $labels = collect(['Today', 'Week', 'Month']);
            $data->push(Bill::whereDate('created_at', Carbon::today())->count());
            $data->push(Bill::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count());
            $data->push(Bill::whereBetween('created_at', [Carbon::today()->startOfMonth(), Carbon::today()->endOfMonth()])->count());
        }

        $chart = new SampleChart;
        $chart->labels($labels);
        $chart->dataset('Total bill', 'bar', $data);

        return view("salers.statistic", compact("chart"));
    }

}
