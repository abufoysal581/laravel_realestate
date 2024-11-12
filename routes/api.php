<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\propertyController;
use App\Http\Controllers\Api\RequestforrentController;
use App\Http\Controllers\Api\RequestsForBuyingController;
use App\Http\Controllers\Api\RentedPropertyListController;
use App\Http\Controllers\Api\SoldPropertyController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\PaySoldController;
use App\Http\Controllers\Api\CatagoryController;
use App\Http\Controllers\Api\AllocationsController;

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
    Route::get('property','index');
    Route::post('property/create','store');
    Route::get('property/{property}','show');
    Route::post('property/edit/{id}','update');
    Route::delete('property/{property}','destroy');
    // Route::post('designation/create','store');
});

Route::controller(RequestforrentController::class)->group(function(){
    Route::get('requestsforrent','index');
    Route::post('requestsforrent/create','store');
    Route::get('requestsforrent/{requestsforrent}','show');
    Route::post('requestsforrent/edit/{id}','update');
    Route::delete('requestsforrent/{requestsforrent}','destroy');
    // Route::post('designation/create','store');
});

Route::controller(RequestsForBuyingController::class)->group(function(){
    Route::get('requestsforbuying','index');
    Route::post('requestsforbuying/create','store');
    Route::get('requestsforbuying/{requestsforbuying}','show');
    Route::post('requestsforbuying/edit/{id}','update');
    Route::delete('requestsforbuying/{requestsforbuying}','destroy');
    // Route::post('designation/create','store');
});

Route::controller(RentedPropertyListController::class)->group(function(){
    Route::get('rentedpropertylist','index');
    Route::post('rentedpropertylist/create','store');
    Route::get('rentedpropertylist/{rentedpropertylist}','show');
    Route::post('rentedpropertylist/edit/{id}','update');
    Route::delete('rentedpropertylist/{rentedpropertylist}','destroy');
    // Route::post('designation/create','store');
});

Route::controller(SoldPropertyController::class)->group(function(){
    Route::get('soldpropertylist','index');
    Route::post('soldpropertylist/create','store');
    Route::get('soldpropertylist/{soldpropertylist}','show');
    Route::post('soldpropertylist/edit/{id}','update');
    Route::delete('soldpropertylist/{soldpropertylist}','destroy');
    // Route::post('designation/create','store');
});

Route::controller(ClientController::class)->group(function(){
    Route::get('clients','index');
    Route::post('clients/create','store');
    Route::get('clients/{clients}','show');
    Route::post('clients/edit/{id}','update');
    Route::delete('clients/{clients}','destroy');
    // Route::post('designation/create','store');
});

Route::controller(CatagoryController::class)->group(function(){
    Route::get('catagory','index');
    Route::post('catagory/create','store');
    Route::get('catagory/{clients}','show');
    Route::post('catagory/edit/{id}','update');
    Route::delete('catagory/{clients}','destroy');
    // Route::post('designation/create','store');
});

Route::controller(AllocationsController::class)->group(function(){
    Route::get('allocations','index');
    Route::post('allocations/create','store');
    Route::get('allocations/{clients}','show');
    Route::post('allocations/edit/{id}','update');
    Route::delete('allocations/{clients}','destroy');
    // Route::post('designation/create','store');
});


