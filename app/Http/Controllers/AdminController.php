<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function getdata(){
    //     $data = DB::table('Order_details')->get('total');
    //     return $data;
    // }

    public function show()
    {

        $ordersByMonth = DB::table('Order_item')->selectRaw('COUNT(*) as order_count, DATE_FORMAT(created_at, "%Y-%m") as order_month')
            ->groupBy(DB::raw('DATE_FORMAT(created_at, "%Y-%m")'))
            ->orderBy('order_month')
            ->get();
        $dataMonth[] = [];
        foreach ($ordersByMonth as $i => $value) {
            $dataMonth[$i] = [$value->order_month,$value->order_count];
        }
        return view('admin.dashboard', ['datamonth' => $dataMonth]);
    }
}
