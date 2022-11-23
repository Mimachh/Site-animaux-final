<?php

use App\Http\Livewire\AnimalOwnedForm;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Annonces;
use App\Http\Livewire\Animals;



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


Route::get('/welcome', function () {
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
    
    Route::resource('/animals', Animals::class);    
});

Route::resource('/annonces', Annonces::class)
    ->except('index');

Route::get('/', [Annonces::class, 'index'])->name('annonces.index');




