<?php

use App\Http\Controllers\EquipesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\RendezVousController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);



Route::get('/', [PagesController::class, 'index']);







Route::resource('/dashboard', DashController::class);
Route::resource('/equipe', EquipesController::class);
Route::get('/rendez-vous',function(){return view('rendezvous');});

Route::get('/admini',function(){return view('admin');});
Route::get('/contact',function(){return view('contact');});
Route::get('/actu',function(){return view('actu');});
Route::get('/about',function(){return view('about');});

Auth::routes();


Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::POST('/rendezvous', 'RendezVousController@store')->name('rendezvous.store');
  