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
    public function index()
    {
        //
        // $tripData = TripData;
        // return view("trip", compact("tripData"));

        return view("trip");
    }
    // public function data(){
    //     $foods = TripData::query();
    //     return DataTables::of($foods)->make(true);   
    // }

    public function getData(){
        // $trips = TripData::query();
        // return view("trip.index", compact("trips"));
        $trips = TripData::get();
        return view("trip.index", compact("trips"));
    }


    // public function index()
    // {
    //     //
    //     $products = Product::paginate(10);
    //     return view("product.index", compact("products"));
    // }

   


}
