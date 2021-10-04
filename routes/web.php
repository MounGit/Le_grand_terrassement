<?php

use App\Http\Controllers\BookinkController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Models\Bookink;
use App\Models\Customer;
use App\Models\Welcome;
use App\Models\Chef;
use App\Models\Section;
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

//  Route::get('/', function () {
//      return view('welcome');
//  });




// FRONT

Route::get('/', function(){
    $bookink = Bookink::all();
    $welcome = Welcome::all();
    $chef=Chef::all();
    $customer = Customer::all();
    $section = Section::all();
    return view ('home', compact('bookink', 'welcome', 'customer', 'chef', 'section'));
})->name('home');

// BACKOFFICE

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// NAV

Route::get('/navs', [NavController::class, 'index'])->middleware(['auth', 'webmaster'])->name('nav');

Route::get('/navs/{id}/edit', [NavController::class, 'edit'])->middleware(['auth', 'webmaster'])->name('navEdit');

Route::put('/navs/{id}/update', [NavController::class, 'update'])->middleware(['auth', 'webmaster'])->name('navUpdate');

// STYLE SECTIONS

Route::get('/sections', [SectionController::class, 'index'])->middleware(['auth', 'webmaster'])->name('section');

Route::get('/sections/{id}/edit', [SectionController::class, 'edit'])->middleware(['auth', 'webmaster'])->name('sectionEdit');

Route::put('/sections/{id}/update', [SectionController::class, 'update'])->middleware(['auth', 'webmaster'])->name('sectionUpdate');


// WELCOME 

Route::get('/backoffice/welcome', [WelcomeController::class, 'index'])->middleware(['auth', 'webmaster'])->name('welcome');

Route::get('/welcome/{id}/edit', [WelcomeController::class, 'edit'])->middleware(['auth', 'webmaster'])->name('welcomeEdit');

Route::put('/welcome/{id}/update', [WelcomeController::class, 'update'])->middleware(['auth', 'webmaster'])->name('welcomeUpdate');


// CHEFS

Route::resource('/chefs', ChefController::class)->middleware(['auth', 'webmaster']);

// CUSTOMERS

Route::resource('/customers', CustomerController::class)->middleware(['auth', 'editeur']);

// BOOKING

Route::resource('/bookinks', BookinkController::class)->middleware(['auth', 'webmaster']);

// USERS

Route::resource('/users', UserController::class)->middleware(['auth', 'admin']);

// FOOTER


require __DIR__.'/auth.php';
