<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\Pages\PagesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[PagesController::class, 'index'])->name('home');
Route::get('/product', [PagesController::class, 'product'])->name('page.product');


//Admin Controller
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/add-product', [AdminProductController::class, 'add'])->name('admin.product.add');
Route::post('/admin/add-product', [AdminProductController::class, 'store'])->name('admin.upload.product');
Route::get('/admin/edit-product', [AdminProductController::class, 'edit'])->name('admin.product.edit');

// Route::middleware(['admin'])->group(function () {
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
//     // Other admin routes...
// });
