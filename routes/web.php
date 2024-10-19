<?php

use App\Http\Controllers\admin\CategoryController;
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
Route::get('/category', [CategoryController::class, 'index']);

// resources
// Route::resource('/categories', CategoryController::class);


