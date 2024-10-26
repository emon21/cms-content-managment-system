<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashBoardController;
use App\Http\Controllers\admin\PricePlanController;
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


# // ============= Admin Routes =============

// Route::group(['prefix' => 'admin'], function () {
//     Route::get('/login', [App\Http\Controllers\Admin\LoginController::class, 'index'])->name('admin.login');    
//     Route::post('/login', [App\Http\Controllers\Admin\LoginController::class, 'store']);
// });

# // ============== Backend Routes ============== //

// Route::group(['prefix' => 'admin'], function () {
//     Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
// });


# Category Route API
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::post('/category/create', [CategoryController::class, 'create'])->name('category.create');
// Route::get('/category/create', [CategoryController::class, 'create']);

Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');

// Route::get('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::delete('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

// Single Data show in Category
Route::get('/category/show/{id}', [CategoryController::class, 'show'])->name('category.show');

// resources
// Route::resource('/categories', CategoryController::class);


# Blog Route API
// Route::resource('/blog', BlogController::class);
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');

Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');

Route::get('/blog/edit/{blog:slug}', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('/blog/update/{blog}', [BlogController::class, 'update'])->name('blog.update');

Route::delete('/blog/Destroy/{blog}', [BlogController::class, 'destroy'])->name('blog.destroy');

Route::get('/blog/show/{blog:slug}', [BlogController::class, 'show'])->name('blog.show');



# Service Route API


# Price Plan Route API
Route::resource('PricePlan', PricePlanController::class);
// Route::resource('/blog', BlogController::class);



// route prefix
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [DashBoardController::class, 'index'])->name('admin.dashboard');
});
