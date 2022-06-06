<?php

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

use App\Http\Controllers\ShopsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\CustomersController;

  
Route::resource('shops', ShopsController::class);
Route::resource('products', ProductsController::class);
Route::resource('categories', CategoriesController::class);
Route::resource('users', UsersController::class);
Route::resource('invoices', InvoicesController::class);
Route::resource('quotes', QuotesController::class);
Route::resource('customers', CustomersController::class);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// users
Route::get('profile', [UsersController::class, 'profile'])->name('profile');
Route::post('/updateuser',[UsersController::class, 'updateuser'])->name('updateuser');
Route::get('/loginAs/{id}', [UsersController::class, 'loginAs'])->name('loginAs');
Route::post('/users/ajoutimage',[UsersController::class, 'ajoutimage'])->name('users.ajoutimage');
Route::post('/activer/{id}', [UsersController::class, 'activer'])->name('activer');
Route::post('/desactiver/{id}', [UsersController::class, 'desactiver'])->name('desactiver');
 
//Signature
Route::get('signatures', [App\Http\Controllers\SignaturePadController::class, 'index']);
Route::get('signature/{quote_id}', [App\Http\Controllers\SignaturePadController::class, 'signature'])->name('signature');
Route::post('signature-pad', [App\Http\Controllers\SignaturePadController::class, 'save'])->name('signpad.save');