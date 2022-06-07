<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;

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

Route::get('index',function(){
    return view('index');
});

Route::get('a',function(){
    return view('a');
});

Route::POST('sum',[IndexController::class, 'sum']);

Route::POST('animal-insert',[IndexController::class,'animal']);

Route::get('insert',function(){
    return view('insert');
});
Route::get('list',[AnimalController::class,'index']);

Route::post('regist',[AnimalController::class,'regist']);

Route::get('insert2',[StudentController::class,'index']);
Route::get('inStudent',[StudentController::class,'in']);