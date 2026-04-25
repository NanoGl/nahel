<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function bikes(){
        return "Bikes";
    }

    public function motos(){
        return "Motos";
    }

    public function bikeParts(){
        return "Bike Parts";
    }
}
