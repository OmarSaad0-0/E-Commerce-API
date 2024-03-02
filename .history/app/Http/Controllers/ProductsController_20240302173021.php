<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Variants;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function Get_Products(Request $request){


        $query=Products::query();
        if ($request->has('filter.average_rating')) {
            $averageRating = $request->input('filter.average_rating');
            $query->where('average_rating', $averageRating);
        }
        $Products=$query->get();

         return response()->json($Products);
    }
   /* public function Average_Rating($value){
        $Product=Products::select()->where('Average_Rating',$value)->get();
        return response()->json($Product);
    }
     public function Options($value){
        $Product=Products::select()->where('options','like','%'.$value.'%')->get();
        return response()->json($Product);
    }
    public function Get_MaxPrice(){
        $MaxProduct=Products::join('variants','products.Id','=','variants.P_Id')->orderBy('price','desc')->first();

        return response()->json($MaxProduct);
    }*/
}
