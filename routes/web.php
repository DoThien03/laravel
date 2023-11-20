<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

Route::view('master', 'layouts.master');
Route::view('admin/dashboard', 'admin.dashboard');
Route::view('admin/brand', 'admin.brand');

Route::resource('products', ProductController::class);
Route::resource('students', StudentController::class);

Route::get('admin/brands', [BrandController::class, 'index'])->name('brands');
Route::get('admin/brands/create', [BrandController::class, 'create'])->name('brands.create');
Route::post('brands/store', [BrandController::class, 'store'])->name('brands.store');
Route::get('brands/{id}', [BrandController::class, 'show'])->name('brands.show');
Route::get('brands/{id}/edit', [BrandController::class, 'edit'])->name('brands.edit');
Route::put('brands/update', [BrandController::class, 'update'])->name('brands.update');
Route::delete('brands/delete', [BrandController::class, 'delete'])->name('brands.delete');
