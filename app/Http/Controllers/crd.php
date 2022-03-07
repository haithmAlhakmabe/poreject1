<?php

namespace App\Http\Controllers;
use app\App\Http\car;

use Illuminate\Http\Request;

class crdontroller extends Controller
{
   
    public function getcar(){
        return ca::get();
    }
}
