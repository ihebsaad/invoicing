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
use App\Http\Controllers\ModelesController;

Route::get('/quotes/all', [QuotesController::class, 'all'])->name('quotes.all');


Route::resource('shops', ShopsController::class);
Route::resource('categories', CategoriesController::class);
Route::resource('users', UsersController::class);
Route::resource('invoices', InvoicesController::class);
Route::resource('quotes', QuotesController::class);
Route::resource('customers', CustomersController::class);
Route::resource('modeles', ModelesController::class);

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

//invoices
Route::get('/invoices/download_pdf/{id}', [InvoicesController::class, 'download_pdf'])->name('invoices.download_pdf');
Route::get('/invoices/show_pdf/{id}', [InvoicesController::class, 'show_pdf'])->name('invoices.show_pdf');
Route::get('/invoices/send_pdf/{id}', [InvoicesController::class, 'send_pdf'])->name('invoices.send_pdf');
Route::get('/invoices/add/{customer_id}', [InvoicesController::class, 'add'])->name('invoices.add');
Route::post('/invoices/update_totals',[InvoicesController::class, 'update_totals'])->name('invoices.update_totals');
Route::get('/invoices/edit_men/{id}', [InvoicesController::class, 'edit_men'])->name('invoices.edit_men');


//quotes
Route::get('/quotes/download_pdf/{id}', [QuotesController::class, 'download_pdf'])->name('quotes.download_pdf');
Route::get('/quotes/download_pdf_signature/{id}', [QuotesController::class, 'download_pdf_signature'])->name('quotes.download_pdf_signature');
Route::get('/quotes/show_pdf/{id}', [QuotesController::class, 'show_pdf'])->name('quotes.show_pdf');
Route::get('/quotes/save_invoice/{id}', [QuotesController::class, 'save_invoice'])->name('quotes.save_invoice');
Route::post('/update_totals',[QuotesController::class, 'update_totals'])->name('update_totals');
Route::get('/quotes/add/{customer_id}', [QuotesController::class, 'add'])->name('quotes.add');
Route::post('/quotes/ajout_signature', [QuotesController::class, 'ajout_signature'])->name('quotes.ajout_signature');
Route::get('/quotes/edit_men/{id}', [QuotesController::class, 'edit_men'])->name('quotes.edit_men');

//products
Route::post('/add_item',[ProductsController::class, 'add_item'])->name('add_item');
Route::post('/add_item_men',[ProductsController::class, 'add_item_men'])->name('add_item_men');
Route::post('/delete_item',[ProductsController::class, 'delete_item'])->name('delete_item');
Route::post('/save_item_qty',[ProductsController::class, 'save_item_qty'])->name('save_item_qty');
Route::get('products/trashed', [ProductsController::class, 'trashed'])->name('products.trashed');
Route::get('products/{id}/restore', [ProductsController::class, 'restore'])->name('products.restore');
Route::get('products/{id}/force', [ProductsController::class, 'forceDelete'])->name('products.force');

Route::resource('products', ProductsController::class);

//modeles
Route::post('/additem',[ModelesController::class, 'add_item'])->name('modeles.add_item');
Route::get('/pricing',[ModelesController::class, 'pricing'])->name('pricing');
Route::post('/add_article',[ModelesController::class, 'add_article'])->name('add_article');
Route::post('/delete_article',[ModelesController::class, 'delete_article'])->name('delete_article');
Route::post('/save_article_qty',[ModelesController::class, 'save_article_qty'])->name('save_article_qty');

//doors
Route::get('/pricing_door',[ModelesController::class, 'pricing_door'])->name('pricing_door');
Route::post('/add_door',[ModelesController::class, 'add_door'])->name('add_door');
Route::post('/delete_door',[ModelesController::class, 'delete_door'])->name('delete_door');
Route::post('/save_door_qty',[ModelesController::class, 'save_door_qty'])->name('save_door_qty');

//volets
Route::get('/pricing_volet',[ModelesController::class, 'pricing_volet'])->name('pricing_volet');
Route::post('/add_volet',[ModelesController::class, 'add_volet'])->name('add_volet');
Route::post('/delete_volet',[ModelesController::class, 'delete_volet'])->name('delete_volet');
Route::post('/save_volet_qty',[ModelesController::class, 'save_volet_qty'])->name('save_volet_qty');