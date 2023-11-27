<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;


class AdminController extends Controller
{
    public function show()
    {

        $dataPieChart = Product::select(
            'categories.name as category_name',
            DB::raw('COUNT(products.id) as product_count')
        )
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->groupBy('categories.name')
            ->get();

        $datamonth = Order::select(
            DB::raw('DATE_FORMAT(created_at, "%Y-%m") AS month_year'),
            DB::raw('COUNT(id) AS order_count'),
            DB::raw('SUM(total_price) AS total_amount')
        )
            ->groupBy(DB::raw('DATE_FORMAT(created_at, "%Y-%m")'))
            ->orderBy('month_year')
            ->get();

        $dataYear = Order::select(
            DB::raw('YEAR(created_at) as year'),
            DB::raw('COUNT(id) as total_orders'),
            DB::raw('SUM(total_price) as total_sales')
        )
            ->groupBy(DB::raw('YEAR(created_at)'))
            ->orderBy(DB::raw('YEAR(created_at)'))
            ->get();
        return view('admin.dashboard', ['dataPieChart' => $dataPieChart, 'datamonth' => $datamonth,'dataYear' => $dataYear]);
    }
}
