<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\imagecontroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\rentcontroller;
use App\Http\Controllers\tenantcontroller;
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


Route::get('/home',[Homecontroller::class,'index'])->middleware('auth')->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('properties',[admincontroller::class,"index"])->name('prop.index');
    Route::post('properties/store',[admincontroller::class,'store'])->name('prop.store');
    Route::get('properties image',[imagecontroller::class,"index"])->name('prop.image');
    Route::post('images/store',[imagecontroller::class,'store'])->name('store.image');
    Route::get('properties tenant',[tenantcontroller::class,"index"])->name('prop.tenant');
    Route::get('properties rent',[rentcontroller::class,"index"])->name('prop.rent');
});

require __DIR__.'/auth.php';

