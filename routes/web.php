<?php

use App\Http\Controllers\AboutsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\BusinessesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\EducationsController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\profile\ContactMeController;
use App\Http\Controllers\profile\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Middleware\VerifyCsrfToken;
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

Route::get('/', [ProfileController::class, 'index']);

Auth::routes();


Route::group(
    [
        'prefix' => 'admin',
        'middleware' => ['auth'],
    ], function () {
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('about', AboutsController::class)->except(['create' , 'show']);
Route::put('status/about/{id}', [AboutsController::class , 'status']);
Route::resource('education', EducationsController::class)->except(['create' , 'show']);
Route::put('status/education/{id}', [EducationsController::class , 'status']);
Route::resource('experience', ExperiencesController::class)->except(['create' , 'show']);
Route::put('status/experience/{id}', [ExperiencesController::class , 'status']);
Route::resource('skill', SkillsController::class)->except(['create' , 'show']);
Route::put('status/skill/{id}', [SkillsController::class , 'status']);
Route::resource('category', CategoriesController::class)->except(['create' , 'show']);
Route::put('status/category/{id}', [CategoriesController::class , 'status']);
Route::resource('business', BusinessesController::class)->except(['create' , 'show']);
Route::put('status/business/{id}', [BusinessesController::class , 'status']);
Route::resource('service', ServicesController::class)->except(['create' , 'show']);
Route::put('status/service/{id}', [ServicesController::class , 'status']);
Route::resource('testimonial', TestimonialsController::class)->except(['create' , 'show']);
Route::put('status/testimonial/{id}', [TestimonialsController::class , 'status']);
Route::resource('blog', BlogsController::class)->except(['create' , 'show']);
Route::put('status/blog/{id}', [BlogsController::class , 'status']);
Route::resource('contact', ContactsController::class)->only(['index' , 'destroy']);
Route::resource('setting', SettingsController::class)->only(['index' , 'update']);
});

Route::group(
    [
        'prefix' => 'user',
    ], function () {
        Route::get('/contact', [ContactMeController::class, 'store'])->name('contact.store');
});

Route::post('modal/contact.php', [ContactMeController::class, 'store'])->name('contact.store')
;
