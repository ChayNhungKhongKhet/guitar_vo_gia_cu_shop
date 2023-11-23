<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\order_item;
use App\Models\product;

class AdminController extends Controller
{
    public function show()
    {

        //query data for column chart
        //query total orders in a month
        $ordersByMonth = order_item::selectRaw('COUNT(*) as order_count, DATE_FORMAT(created_at, "%Y-%m") as order_month')
            ->groupBy(DB::raw('DATE_FORMAT(created_at, "%Y-%m")'))
            ->orderBy('order_month')
            ->get();
        $dataMonth[] = [];
        foreach ($ordersByMonth as $i => $value) {
            $dataMonth[$i] = [$value->order_month, $value->order_count];
        }
        //query total oders in a quarter
        $ordersByQuarter = order_item::selectRaw('YEAR(created_at) AS Year, QUARTER(created_at) AS Quarter, COUNT(*) AS OrderCount')
            ->groupBy('Year', 'Quarter')
            ->orderBy('Year')
            ->orderBy('Quarter')
            ->get();

        $dataQuarter[] = [];
        foreach ($ordersByQuarter as $i => $value) {
            $quarter = (string)$value->Quarter . "-" . (string)$value->Year;
            $dataQuarter[$i] = [$quarter, $value->OrderCount];
        }

        //query total orders in a year
        $ordersByYear = order_item::selectRaw('COUNT(*) as order_count, DATE_FORMAT(created_at, "%Y") as order_month')
            ->groupBy(DB::raw('DATE_FORMAT(created_at, "%Y")'))
            ->orderBy('order_month')
            ->get();
        $dataYear[] = [];
        foreach ($ordersByYear as $i => $value) {
            $dataYear[$i] = [$value->order_month, $value->order_count];
        }

        //query data for pie chart
        $result = category::select('categorys.name as category_name', product::raw('SUM(products.stock_quantity) as total_quantity'))
            ->leftJoin('products', 'categorys.id', '=', 'products.category_id')
            ->groupBy('categorys.name')
            ->get();

        //Stacked chard
        $resultsStacked = order_item::select(
            DB::raw('YEAR(order_items.created_at) AS year'),
            DB::raw('MONTH(order_items.created_at) AS month'),
            DB::raw('COUNT(order_items.order_detail_id) AS total_orders'),
            DB::raw('SUM(products.price * order_items.quantity) AS total_amount')
        )
        ->join('products', 'order_items.product_id', '=', 'products.id')
        ->join('order_detail', 'order_items.order_detail_id', '=', 'order_detail.id')
        ->groupBy(DB::raw('YEAR(order_items.created_at), MONTH(order_items.created_at)'))
        ->orderBy('year')
        ->orderBy('month')
        ->get();
        return view('admin.dashboard', ['resultsStacked' => $resultsStacked,'results' => $result, 'datamonth' => $dataMonth, 'dataquarter' => $dataQuarter, 'datayear' => $dataYear]);
    }
}
