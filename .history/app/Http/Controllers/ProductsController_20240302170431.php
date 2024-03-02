<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Variants;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function Get_Products(){
        $Products=Products::all();
         return response()->json($Products);
    }
    public function Average_Rating($value){
        $Product=Products::select()->where('Average_Rating',$value)->get();
        return response()->json($Product);
    }
     public function Options($value){
        $Product=Products::select()->where('options','like','%'.$value.'%')->get();
        return response()->json($Product);
    }
    public function Get_MaxPrice(){
        $MaxProduct=Products::join('variants','products.Id','=','variants.P_Id')->max('price');
        return response()->json($MaxProduct);
    }
}
