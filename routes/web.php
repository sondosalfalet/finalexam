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
    Route::get("index,function")
    return view('contact-list')
    Route::get index(function);
    return view ("contact list")
    Route ::get('/',function(){
        return view('contact-list');
});


use App\Http\controllers\ContactController;
use Illuminate\Support\facades\Route;
Route::get('/',[ContactController::class,'index']);
Route::get('contact',[ContactController::class,'contect']);
Route::post('store',[ContactController::class,'store']);
Route::put('edit/{id}',[ContactController::class,'edit']);
Route::patch('update//{id}',[ContactController::class,'update']);
Route::delete('destory//{id}',[ContactController::class,'destory']);
// public function edite($id)
// $contact=contact::find($id)
// return view('edite',compact((contact));
// public function update(request$request,$id)
// return view('index');
// public function destroy(request$request,$id)
// return view ('index')
