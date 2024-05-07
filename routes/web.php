<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;

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

Route::get('/', [MainController::class, 'mainpage']);
Route::get('/paginate', [MainController::class, 'paginate']);
Route::get('/search', [MainController::class, 'search']);
Route::get('/category/{id}', [MainController::class, 'category']);
Route::get('/subcategory/{id}', [MainController::class, 'subcategory']);
Route::get('/product/{id}', [MainController::class, 'product']);
Route::get('/privacy', [MainController::class, 'privacy']);
Route::get('/home/delslide/{id}' , [HomeController::class, 'delslide' ]);
Route::get('/home/delproduct/{id}' , [HomeController::class, 'delproduct' ]);
Route::get('/home/addproduct', [HomeController::class, 'addproduct' ]);
Route::get('/home/editproduct/{id}', [HomeController::class, 'editproduct' ]);
Route::post('/saveproduct', [HomeController::class, 'saveproduct']);
Route::post('/saveslide', [HomeController::class, 'saveslide']);
Route::post('/saveedit', [HomeController::class, 'saveedit']);
Route::post('/sendmail', [MailController::class, 'send']);
Route::get('/home/adminsearch', [HomeController::class, 'adminsearch']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
