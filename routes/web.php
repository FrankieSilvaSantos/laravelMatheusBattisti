<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\EventController;

Route::get('/',[EventController::class,'index']);

Route::get('/events/create',[EventController::class,'create']);

Route::post('/events',[EventController::class,'store']);



Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    $busca = request('search');
    return view('products',['busca' => $busca]);
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    
    return view('product', ['id' => $id]);
});

Route::get('/testeRequest',[EventController::class,'testeRequest']);


Route::get('/testGetId/{id?}', [EventController::class,'testGetId']);

Route::get('/testDb',[EventController::class,'testDb']);

Route::get('/testgetimage',[EventController::class,'testGetImage']);

Route::POST('/testgetimage',[EventController::class,'storeImage']);

Route::GET('/events/{id}',[EventController::class,'show']);
