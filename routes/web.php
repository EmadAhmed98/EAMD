<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get ('/about',function(){
    $name = request ('name');

    return view('about',compact('name'));
});
Route::post('/ss',function(){
   $name = request('name');
    return view('about',compact('name'));
});

Route::get('/task', function() {

    $tasks =
     [
         'frist name' => 'Emad' ,
         'list name' => 'droesh',
         'age' => 30

     ] ;

    return view( 'task' , compact('tasks'));


});



Route::get('show/{id}', function($id) {

    $tasks =
     [
        'frist name' => 'Emad' ,
        'list name' => 'droesh',
        'age' => 30

     ] ;

    $task = $tasks[$id];
    return view( 'show' , compact('task'));


});
