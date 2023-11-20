<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showData()
    {
        //query total orders in a month
        $ordersByMonth = DB::table('Order_item')->selectRaw('COUNT(*) as order_count, DATE_FORMAT(created_at, "%Y-%m") as order_month')
            ->groupBy(DB::raw('DATE_FORMAT(created_at, "%Y-%m")'))
            ->orderBy('order_month')
            ->get();
        $dataMonth[] = ['Month','Total'];
        foreach ($ordersByMonth as $i => $value) {
            $dataMonth[++$i] = [$value->order_month, $value->order_count];
        }

        //query total oders in a quarter
        $ordersByQuarter = DB::table('Order_item')
            ->selectRaw('YEAR(created_at) AS Year, QUARTER(created_at) AS Quarter, COUNT(*) AS OrderCount')
            ->groupBy('Year', 'Quarter')
            ->orderBy('Year')
            ->orderBy('Quarter')
            ->get();

        $dataQuarter[] = ['Quarter','Total'];
        foreach ($ordersByQuarter as $i => $value) {
            $quarter = (string)$value->Quarter . "-" . (string)$value->Year;
            $dataQuarter[++$i] = [$quarter, $value->OrderCount];
        }

        //query total orders in a year
        $ordersByYear = DB::table('Order_item')->selectRaw('COUNT(*) as order_count, DATE_FORMAT(created_at, "%Y") as order_month')
            ->groupBy(DB::raw('DATE_FORMAT(created_at, "%Y")'))
            ->orderBy('order_month')
            ->get();
        $dataYear[] = ['Year','Total'];
        foreach ($ordersByYear as $i => $value) {
            $dataYear[++$i] = [$value->order_month, $value->order_count];
        }
        return view('admin.dashboard', ['datamonth' => $dataMonth,'dataquarter' => $dataQuarter,'datayear' => $dataYear]);
    }
}
