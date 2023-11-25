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
        $dataYear = order_item::select(
            DB::raw("DATE_FORMAT(Order_items.created_at, '%Y') AS order_month"),
            DB::raw("SUM(products.price * quantity) AS total_amount"),
            DB::raw("COUNT(order_detail_id) AS total_orders")
        )
            ->join('products', 'Order_items.product_id', '=', 'products.id')
            ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y')"))
            ->orderBy(DB::raw("DATE_FORMAT(created_at, '%Y')"))
            ->get();
        //query data for pie chart
        $dataPieChart = category::select('categories.name as category_name', product::raw('SUM(products.remain) as total_quantity'))
            ->leftJoin('products', 'categories.id', '=', 'products.category_id')
            ->groupBy('categories.name')
            ->get();

        //Stacked chard
        $dataMonth = order_item::select(
            DB::raw("DATE_FORMAT(Order_items.created_at, '%Y-%m') AS order_month"),
            DB::raw("SUM(products.price * quantity) AS total_amount"),
            DB::raw("COUNT(order_detail_id) AS total_orders")
        )
            ->join('products', 'Order_items.product_id', '=', 'products.id')
            ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y-%m')"))
            ->orderBy(DB::raw("DATE_FORMAT(created_at, '%Y-%m')"))
            ->get();
        return view('admin.dashboard', ['dataPieChart' => $dataPieChart, 'datamonth' => $dataMonth, 'datayear' => $dataYear]);
    }
}
