<?php

use App\Http\Controllers\AboutsController;
use App\Http\Controllers\EducationsController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillsController;
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
Route::resource('about', AboutsController::class);
Route::put('status/about/{id}', [AboutsController::class , 'status']);
Route::resource('education', EducationsController::class);
Route::put('status/education/{id}', [EducationsController::class , 'status']);
Route::resource('experience', ExperiencesController::class);
Route::put('status/experience/{id}', [ExperiencesController::class , 'status']);
Route::resource('experience', ExperiencesController::class);
Route::put('status/experience/{id}', [ExperiencesController::class , 'status']);
Route::resource('skill', SkillsController::class);
Route::put('status/skill/{id}', [SkillsController::class , 'status']);
});
