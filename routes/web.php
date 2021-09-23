<?php

use App\Http\Controllers\BookinkController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\WelcomeController;
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
 });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::get('/home', function(){
    return view ('home');
})->name('home');

Route::resource('/bookinks', BookinkController::class)->middleware(['auth']);

Route::resource('/chefs', ChefController::class)->middleware(['auth']);

Route::resource('/customers', CustomerController::class)->middleware(['auth']);

Route::get('/backoffice/welcome', [WelcomeController::class, 'index'])->middleware(['auth'])->name('welcome');

Route::get('/welcome/{id}/edit', [WelcomeController::class, 'edit'])->middleware(['auth'])->name('welcomeEdit');

Route::put('/welcome/{id}/update', [WelcomeController::class, 'update'])->middleware(['auth'])->name('welcomeUpdate');

require __DIR__.'/auth.php';
