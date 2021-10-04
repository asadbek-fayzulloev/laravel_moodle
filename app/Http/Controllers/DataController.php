<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class DataController extends Controller
{
    public function pieChartData(){

        return [
            "hoverBackgroundColor" => "red",
            "hoverBorderWidth" => 10,
            "labels" => ["Green", "Red", "Blue"],
            "datasets" => array([
                "label" => "Data One",
                "backgroundColor" => ["#41B883", "#E46651", "#00D8FF"],
                "data" => [5, 5, 10]
            ])
        ];

    }
}
