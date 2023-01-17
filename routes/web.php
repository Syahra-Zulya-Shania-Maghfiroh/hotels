<?php

use App\Http\Controllers\TypeController;
use Illuminate\Routing\Route as RoutingRoute;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [TypeController::class, 'index']);
// Route::get('/admin', function () {
//     return view('homeAdmin');
// });
Route::get('/login', function () {
    return view('login');
});
Route::post('/admin', [TypeController::class, 'store'])->name('buat');

Route::get('/admin', [TypeController::class, 'index'])->name('index');

// Route::get('/admin', 'TypeController@index')->name('index');
// Route::post('/admin', 'TypeController@store')->name('buat');
