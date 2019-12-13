<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TripData;

class TripDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     return view("trip");
    // }

    public function getData(){
        $trips = TripData::get();
        return view("trip.index", compact("trips"));
    }

    public function index() {
        return view('app');
    }


}
