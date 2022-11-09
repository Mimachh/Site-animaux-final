<?php


use App\Http\Livewire\RaceSelect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Livewire\VilleSelect;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


/* Route::get('/annonces', [AdController::class, 'create'])->name('create.ad');
Route::post('/annonces', [AdController::class, 'store']);  Vieux formulaire*/

Route::get('/annonce', function () {
    return view('ad_create');
})->name('ad.create');

