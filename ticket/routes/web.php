<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientCreateController;
use App\Http\Controllers\ClientReadeController;
use App\Http\Controllers\SupportTraitementController;
use App\Http\Controllers\Admin\CreateUserController;
use App\Http\Controllers\Admin\AssignTicketController;

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


Route::get('/clients/create','App\Http\Controllers\ClientCreateController@index')->name('create')->middleware(['auth', 'verified']);

Route::get('/clients/reade','App\Http\Controllers\ClientReadeController@index')->name('read')->middleware(['auth', 'verified']);

Route::get('/support/traitement','App\Http\Controllers\SupportTraitementController@index')->name('traitement')->middleware(['auth', 'verified']);

Route::get('/admin/createuser','App\Http\Controllers\Admin\CreateUserController@index')->name('createUser')->middleware(['auth', 'verified']);

Route::get('/admin/assignticket','App\Http\Controllers\Admin\AssignTicketController@index')->name('assignticket')->middleware(['auth', 'verified']);


Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
