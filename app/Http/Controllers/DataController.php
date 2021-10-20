<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function pieChartData(){
        return [
            "hoverBackgroundColor" => "red",
            "hoverBorderWidth" => 10,
            "labels" => ["Direct", "Referal", "Organic"],
            "datasets" => array([
                "label" => "Data One",
                "backgroundColor" => ["#41B883", "#E46651", "#00D8FF"],
                "data" => [5, 5, 10]
            ])
        ];

    }
    public function getEnrollments(){
        $users = User::select(DB::raw('COUNT(*) as count'))
            ->whereYear('created_at',date('Y'))
            ->groupBy(DB::raw('Month(created_at)'))
            ->pluck('count');

        $month = User::select(DB::raw('Month(created_at) as month'))
            ->whereYear('created_at',date('Y'))
            ->groupBy(DB::raw('Month(created_at)'))
            ->pluck('month');
        return User::select(DB::raw('COUNT(*) as count'))
            ->whereYear('created_at',date('Y'))
            ->groupBy(DB::raw('Month(created_at)'))
            ->pluck('count');
    }

}
