<?php



use App\Http\Livewire\Annonce;
use App\Http\Livewire\AdForm;
use App\Http\Livewire\Ads;
use App\Http\Livewire\AnimalOwnedForm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Controllers\AnnonceController;

use App\Http\Livewire\Annonces;


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

Route::get('/all-annonce',[AdController::class, 'index'])->name('annonces'); /* Affiche toutes les annonces avec le ad-fav en passant via la view annonces/index.blade */

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
    Route::get('/annoncess', function () {
        return view('ad_create');
    })->name('ad.create');
    Route::resource('/ads', Ads::class)->except('index');
    
});




Route::get('/annoncessss', annonce::class); /* Le bon formulaire qui pour l'instant n'est pas affiché */


Route::get('/create_ad', AdForm::class)->name('create.my.ad'); /* Remplacé par le bon formulaire annonce::class */
Route::get('/create_my_animal', AnimalOwnedForm::class); /* */




Route::get('/ok', [Ads::class, 'index'])->name('ads.index');



Route::resource('/annonces', Annonces::class)->except('index');
Route::get('/', [Annonces::class, 'index'])->name('annonces.index');


