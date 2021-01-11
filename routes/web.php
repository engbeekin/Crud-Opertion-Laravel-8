<?php

use App\Http\Controllers\EmpController;
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


Route::group(['prefix'=>'emp'],function(){
    Route::get('/', [EmpController::class, 'index'] )->name('index');
    Route::get('/create', [EmpController::class, 'create'] )->name('create');
    Route::post('/store', [EmpController::class, 'store'] )->name('store');
    Route::get('/edit/{id}', [EmpController::class, 'edit'] )->name('edit');
    Route::post('/update/{id}', [EmpController::class, 'update'] )->name('update');
    Route::get('/delete/{id}', [EmpController::class, 'destroy'] )->name('delete');
});
