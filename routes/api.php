<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\propertyController;
// use App\Http\Controllers\Api\DesignationController;
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

Route::controller(AuthController::class)->group(function(){
    Route::post('register','_register');
    Route::post('login','_login');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::controller(DesignationController::class)->group(function(){
//     Route::get('property','index');
//     Route::get('property/{property}','show');
//     Route::put('property/{property}','update');
//     Route::delete('property/{property}','destroy');
//     Route::post('property/create','store');
// });


Route::controller(propertyController::class)->group(function(){
    Route::get('property/index','index');
    Route::post('property/create','store');
    Route::get('property/{property}','show');
    Route::post('property/edit/{id}','update');
    Route::delete('property/{property}','destroy');
    // Route::post('designation/create','store');
});
