<?php

namespace App\Http\Controllers;

use App\Bill;
use App\BillDetail;
use App\Charts\SampleChart;
use App\Product;
use App\Saler;
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

    public function getProduct(Request $request)
    {
        $product = Product::where('saler_id', Auth::user()->id)->paginate(20);
        // dd($product);
        return view('salers.index', compact("product"));
    }
    public function statisticIndex(Request $request)
    {
        $data = collect([]); // Could also be an array
        $labels = collect([]);
        $b = collect([]);
        $day = collect([]);
        $week = collect([]);
        $month = collect([]);
        $products = Product::where('saler_id', Auth::user()->id)->get();

        if ($request->from_date && $request->to_date) {
            $begin = new DateTime($request->from_date);
            $end = new DateTime($request->to_date);

            $interval = DateInterval::createFromDateString('1 day');
            $period = new DatePeriod($begin, $interval, $end);

            foreach ($period as $dt) {
                $full_date = $dt->format("Y-m-d");
                $date = $dt->format("d/m");
                $labels->push($date);
                //product
                foreach ($products as $prod) {
                    $billDetail = BillDetail::withTrashed()->where('product_id', $prod->id)->whereRaw('date(created_at) = ?', [date($full_date)])->get();
                    $b->push($billDetail);
                }
                foreach ($b as $item) {
                    if ($item != '[]') {
                        $day->push($b->count());
                    }
                }
                $data->push($day->count());
            }
        } else {
            $labels = collect(['Today', 'Week', 'Month']);
            foreach ($products as $prod) {
                $b_day = BillDetail::withTrashed()->where('product_id', $prod->id)->whereDate('created_at', Carbon::today())->get();
                foreach ($b_day as $item) {
                    if ($item != '[]') {
                        $day->push($b_day->count());
                    }
                }
            }
            $data->push($day->count());
            foreach ($products as $prod) {
                $b_week = BillDetail::withTrashed()->where('product_id', $prod->id)->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
                foreach ($b_week as $item) {
                    if ($item != '[]') {
                        $week->push($b_week->count());
                    }
                }
            }
            $data->push($week->count());
            foreach ($products as $prod) {
                $b_month = BillDetail::withTrashed()->where('product_id', $prod->id)->whereBetween('created_at', [Carbon::today()->startOfMonth(), Carbon::today()->endOfMonth()])->get();
                foreach ($b_month as $item) {
                    if ($item != '[]') {
                        $month->push($b_month->count());
                    }
                }
            }
            $data->push($month->count());
        //   dd($data);
        }

        $chart = new SampleChart;
        $chart->labels($labels);
        $chart->dataset('Total Bill', 'bar', $data);

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
