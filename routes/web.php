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

Route::get('/', function () {

    $idade = 26;
    $nome = 'Franzie';
    $array = [10,20,30,40,50];
    $namesArray = ['matheus','maria','joao','saulo'];

    return view('welcome',['nome' => $nome,'idade' => $idade,'profissao' => 'Coder','array' => $array,
'namesArray' => $namesArray]);

});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});
