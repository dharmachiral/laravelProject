<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

//frontend Routes
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\AppointmentController;
use App\Http\Controllers\frontend\FactsController;
use App\Http\Controllers\frontend\FeatureController;
use App\Http\Controllers\frontend\ProjectController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\frontend\TeamController;
use App\Http\Controllers\frontend\TestimonialController;
use App\Http\Controllers\frontend\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment');
Route::get('/facts', [FactsController::class, 'index'])->name('facts');
Route::get('/feature', [FeatureController::class, 'index'])->name('feature');
Route::get('/project', [ProjectContrhomeoller::class, 'index'])->name('project');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
//Front Routes ends

//Backend Routes
Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('students', StudentController::class);
