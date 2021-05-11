<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\CountController;
use App\Http\Controllers\api\PointVenteController;
use App\Http\Controllers\api\VenteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('login',[AuthController::class,'login']);

Route::get('count/{id}',[CountController::class,'index']);
Route::resource('pv',PointVenteController::class);
Route::resource('vente',VenteController::class);
