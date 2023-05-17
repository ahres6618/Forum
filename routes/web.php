<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::controller(UserController::class)->group(function(){
    Route::get('admin/logout', 'destroy')->name('admin.logout');
    Route::post('store/article', 'Storearticle')->name('article.store');
    Route::get('waiting/articles', 'waitingarticles')->name('waiting.articles');
    Route::get('tobeedited/articles', 'tobeedited')->name('tobeedited.articles');
    Route::get('article/edit/{id}', 'articleedit')->name('article.edit');
    Route::post('article.update', 'articleupdate')->name('article.update');
    Route::get('published/articless', 'publishedarticles')->name('published.articles');
    Route::get('article/delete/{id}', 'deletearticle')->name('article.delete');
    Route::get('article/details/{id}', 'Detailsarticle')->name('article.details');
   
   
    });


Route::controller(AdminController::class)->group(function(){
    Route::get('adminpanel', 'adminpage')->name('admin.panel');
    Route::post('status/approve/{id}', 'approvestatue')->name('article.aprove');
    Route::post('status/edit/{id}', 'editstatue')->name('status.edit');
    Route::post('status/delete/{id}', 'deletestatus')->name('status.delete');
    
        });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
