<?php

use App\Http\Livewire\AdminAdController;
use App\Http\Controllers\AdminContactMessageController;
use App\Http\Controllers\AdminProposalController;
use App\Http\Livewire\AdminUserController;
use App\Http\Livewire\AdminAnimalController;
use App\Http\Livewire\Animals;
use App\Http\Livewire\Annonces;
use App\Http\Livewire\Demandes;
use App\Http\Livewire\GardePage;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\AnimalOwnedForm;
use App\Http\Controllers\ProposalController;



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

    Route::resource('/annonces', Annonces::class)
    ->except('index');

    Route::resource('/animals', Animals::class);   

    Route::resource('/demandes', Demandes::class)->except('create');

    Route::get('demandes/{annonce}/create', [Demandes::class, 'create'])
    ->name('demandes.create');

    Route::get('/proposals', [GardePage::class, 'index'])->name('proposals.index');
    Route::resource('/proposals', GardePage::class)->except('index');

    Route::get('markAsRead', function() {
        auth()->user()->unreadNotifications->markAsRead();
        return redirect()->back();
    })->name('markRead');
    

});


Route::get('/', [Annonces::class, 'index'])->name('annonces.index');

/* Routes Admin penser a faire un middleware */
Route::get('/admin/proposals', [AdminProposalController::class, 'index'])->name('admin.proposals.index');
Route::get('/admin/contacts', [AdminContactMessageController::class, 'index'])->name('admin.contacts.index');

/* Passe par livewire pour le crud */
Route::get('/admin/animals', [AdminAnimalController::class, 'index'])->name('admin.animals.index');
Route::get('/admin/ads', [AdminAdController::class, 'index'])->name('admin.ads.index');
Route::get('/admin/users', [AdminUserController::class, 'index'])->name('admin.users.index');



