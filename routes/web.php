<?php

use App\Http\Controllers\BookinkController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Models\Bookink;
use App\Models\Customer;
use App\Models\Welcome;
use App\Models\Chef;
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


Route::get('/', function(){
    $bookink = Bookink::all();
    $welcome = Welcome::all();
    $chef=Chef::all();
    $customer = Customer::all();
    return view ('home', compact('bookink', 'welcome', 'customer', 'chef'));
})->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})
->middleware(['auth',
//  'admin', 
 'webmaster'
//  , 'editeur'
 ])
->name('dashboard');


Route::resource('/bookinks', BookinkController::class)
// ->middleware(['auth','admin', 'webmaster'])
;


Route::resource('/customers', CustomerController::class)
// ->middleware(['auth', 'admin', 'editeur', 'webmaster'])
;

Route::get('/backoffice/welcome', [WelcomeController::class, 'index'])
// ->middleware(['auth', 'admin', 'webmaster'])
->name('welcome');

Route::get('/welcome/{id}/edit', [WelcomeController::class, 'edit'])
// ->middleware(['auth', 'admin', 'webmaster'])
->name('welcomeEdit')
;

Route::put('/welcome/{id}/update', [WelcomeController::class, 'update'])
// ->middleware(['auth', 'admin', 'webmaster'])->name('welcomeUpdate')
;
Route::resource('/users', UserController::class)
// ->middleware(['auth'])
;

Route::resource('/users', UserController::class)
// ->middleware(['auth', 'admin'])
;

Route::resource('/chefs', ChefController::class)
// ->middleware(['auth', 'admin', 'webmaster'])
;

require __DIR__.'/auth.php';
