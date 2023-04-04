<?php

use App\Http\Controllers\AboutsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\BusinessesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\EducationsController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\TestimonialsController;
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

Route::get('/', function () {
    return view('profile.home.index');
});

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
Route::resource('category', CategoriesController::class);
Route::put('status/category/{id}', [CategoriesController::class , 'status']);
Route::resource('business', BusinessesController::class);
Route::put('status/business/{id}', [BusinessesController::class , 'status']);
Route::resource('service', ServicesController::class);
Route::put('status/service/{id}', [ServicesController::class , 'status']);
Route::resource('testimonial', TestimonialsController::class);
Route::put('status/testimonial/{id}', [TestimonialsController::class , 'status']);
Route::resource('blog', BlogsController::class);
Route::put('status/blog/{id}', [BlogsController::class , 'status']);
});
