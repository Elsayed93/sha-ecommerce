<?php

use App\Http\Controllers\CategoryController;
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
})->name('welcome');


Route::group(['middleware' => ['admin', 'auth'], 'as' => 'dashboard.'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard.home');
    })->middleware('verified')->name('home');

    // categories
    Route::resource('categories', CategoryController::class);
});


require __DIR__ . '/auth.php';
