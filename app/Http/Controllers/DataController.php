<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function pieChartData(){
        $self = DB::select('SELECT count(id) as count FROM mdl_enrol WHERE enrol="self"')[0]->count;
        $manual = DB::select('SELECT count(id) as count FROM mdl_enrol WHERE enrol="manual"')[0]->count;
        $email = DB::select('SELECT count(id) as count FROM mdl_enrol WHERE enrol="email"')[0]->count;
        return [
            "hoverBackgroundColor" => "red",
            "hoverBorderWidth" => 10,
            "labels" => ["Manual", "Self", "Email"],
            "datasets" => array([
                "label" => "Data One",
                "backgroundColor" => ["#41B883", "#E46651", "#00D8FF"],
                "data" => [$manual, $self, $email]
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
