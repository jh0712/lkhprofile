<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
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
Route::resource('task',TasksController::class);

Route::get('/lkhtask', function (){
//    return 'task';
    return redirect()->route('task.index');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Auth::routes();

Route::get('/login_msg', [App\Http\Controllers\HomeController::class, 'index'])->name('login_msg');
