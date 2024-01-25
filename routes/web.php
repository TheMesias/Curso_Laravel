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
    return view('welcome');
});


/*Route::get('/login/{id}', function ($id) {
        return view('login', compact('id')); 
})->where('id', '[0-9]+');

Route::get('/user/{id}', function ($id) {
    return view('login', compact('id')); 
});
*/
Route::get('admin/home', function(){
    $name = "Francisco"; 
    return view('admin.home', compact('name'));
});

Route::get('customer/home', function(){
    return view('customer.home');
});




//llamando en las vistas mas formas
Route::get('/login', function () {
    //return view('login')->with('name', 'Probando nombre')->with('age', 30); 
    return view('login')->with(['name' => 'Probando nombre', 'age' => 30]); 
});




Route::get('/word', function () {
    $country = 'Ecuador';
    $status = 'pendiente';           
    return view('word', compact('country', 'status')); 
});


Route::get('admin/about', function () {          
    return view('admin.about'); 
});