<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\DataClassification;
use App\Http\Livewire\DataTraining;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', Dashboard::class);

Route::get('data-training', DataTraining::class)->name('data-training');
Route::get('data-klasifikasi', DataClassification::class)->name('data-klasifikasi');