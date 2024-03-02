<?php

namespace App\Http\Controllers;
use App\Models\Products
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function Get_Products(){
        $Products=Products::all();
        return return response()->json($Products, 200, $headers);
    }
}
