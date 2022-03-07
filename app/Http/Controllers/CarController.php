<?php

namespace App\Http\Controllers;

use App\Events\videoveiowr;
use Illuminate\Http\Request;
use App\Models\Car;
class CarController extends Controller
{
    public function Getvidiow(){
        // $Cars =  Car::get();
        // return $Cars;
        // dd($Cars);
        // return $Cars[0]->name;
        return view('video');
    }
}
