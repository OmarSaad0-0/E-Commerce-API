<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Variants;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductsController;
class ProductsController extends Controller
{
    //
     public function getProductsOutOfStock(){
        $Products=Products::join('variants','products.Id','=','variants.P_Id')->where('In_Stock','=',0);
        return $Product;

     }
    public function getProducts(Request $request){

        $query=Products::query();


        if ($request->has('filter.average_rating')) {
            $averageRating = $request->input('filter.average_rating');
            $query->where('Average_Rating', $averageRating);
        }
         
        if ($request->has('filter.options')) {
            $options = $request->input('filter.options');
            $Products=$query->where('options','like','%'.$options.'%')->get();
        }

        if ($request->has('filter.max_price')) {
            $price = $request->input('filter.max_price');
            $Products=$query->join('variants','products.Id','=','variants.P_Id')->where('price','=',$price);
        }

        $Products=$query->get();
        return response()->json($Products);

    }
    
   
}
