<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\VotingController as ApiVotingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VotingController;

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



Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', HomeController::class . '@index')->name('home');
    Route::get('/vote/{id}', VotingController::class . '@vote')->name('vote');
});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', AdminController::class . '@index')->name('admin.home');
    Route::get('/calon', AdminController::class . '@calon')->name('admin.calon');
    Route::post('/addcalon', AdminController::class . '@addCalon')->name('admin.addcalon');
    Route::get('/deletecalon/{id}', AdminController::class . '@deleteCalon')->name('admin.deletecalon');
    Route::get('/editcalon/{id}', AdminController::class . '@editCalon')->name('admin.editcalon');
    Route::post('/updatecalon/{id}', AdminController::class . '@updateCalon')->name('admin.updatecalon');
    Route::get('/totalSuara', ApiVotingController::class . '@getSuara')->name('api.totalSuara');
    Route::get('/pemilihTerkini', ApiVotingController::class . '@getPemilihTerkini')->name('api.pemilihTerkini');
    Route::get('/sudahMemilih', ApiVotingController::class . '@getSudahMemilih')->name('api.sudahMemilih');
    Route::get('/pemilih', AdminController::class . '@dataPemilih')->name('admin.pemilih');
    Route::get('/resetPemilih/{id}', AdminController::class . '@resetPemilih')->name('admin.resetPemilih');
    Route::get('/deletePemilih/{id}', AdminController::class . '@deletePemilih')->name('admin.deletePemilih');
});
