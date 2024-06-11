<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class trainController extends Controller
{
    public function index() {
        $today = Carbon::today();

        $trains = Train::where("departure_time","=",$today->toDateString())->get();
        // dd($trains);
        return view("home", compact("trains"));
    }
}
