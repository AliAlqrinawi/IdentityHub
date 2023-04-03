<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
//     return view('profile.home.index');
// });

Auth::routes();


Route::group(
    [
        'prefix' => 'admin',
        'middleware' => ['auth'],
    ], function () {
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('about', AboutController::class);
Route::put('status/about/{id}', [AboutController::class , 'status']);
Route::resource('education', EducationController::class);
Route::put('status/education/{id}', [EducationController::class , 'status']);
});
