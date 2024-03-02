<?php
use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/products", [ProductsController::class,'Get_Products']);
//Route::get("/products/{value}/average", [ProductsController::class,'Average_Rating']);
//Route::get("/products/{value}/options", [ProductsController::class,'Options']);
//Route::get("/products/max_price", [ProductsController::class,'Get_MaxPrice']);