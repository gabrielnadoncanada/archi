<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);
//Route::get('/about-us', [AboutController::class, 'index']);
//
//Route::get('/service-single', [ServiceController::class, 'single']);
//Route::get('/project-single', [ProjectController::class, 'single']);
//Route::get('/product-single', [ProductController::class, 'single']);
//Route::get('/product-archive', [ProductController::class, 'index']);
//Route::get('/career', [CareerController::class, 'index']);
//Route::get('/job-details', [CareerController::class, 'single']);
//Route::get('/team', [TeamController::class, 'index']);
//Route::get('/team-single', [TeamController::class, 'single']);
//Route::get('/blog-single', [BlogController::class, 'single']);

Route::get('/{page:slug}', [PageController::class, 'show']);
Route::get('/services/{post:slug}', [ServiceController::class, 'show']);
Route::get('/blogue/{post:slug?}', [BlogController::class, 'show']);
Route::get('/projets/{post:slug?}', [ProjectController::class, 'show']);
