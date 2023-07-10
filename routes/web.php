<?php

use App\Http\Controllers\Admin\MobilController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
// Route User
Route::middleware(['auth', 'user-role:user'])->group(function () {
    Route::get("/user/index", [HomeController::class, 'userHome'])->name("user.index");
    Route::get('detail/{mobil:slug}', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');

    Route::get('contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
    Route::post('contact', [App\Http\Controllers\HomeController::class, 'contactStore'])->name('contact.store');
});

// Route Admin
Route::middleware(['auth', 'user-role:admin'])->group(function () {
    Route::get("/admin/index", [HomeController::class, 'adminHome'])->name("admin.index");

    Route::resource('mobil', \App\Http\Controllers\Admin\MobilController::class);
    Route::put('mobil/update->image/{id}', [\App\Http\Controllers\Admin\MobilController::class, 'updateGambar'])->name('mobil.updateGambar');

    Route::get('message', [\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('message.index');
    Route::delete('message', [\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('message.destroy');
});
