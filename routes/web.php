<?php

use App\Http\Controllers\CompanyController;
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

Route::controller(CompanyController::class)
->prefix('company')
->group(function (){
Route::get('/create','create')->name('create');
Route::post('/store', 'store')->name('store');

Route::get('/data','index')->name('data');
Route::get('/{id}/edit','edit')->name('edit');
Route::post('/{id}/update','update')->name('update');
Route::get('/{id}/destroy','destroy')->name('destroy');
});

