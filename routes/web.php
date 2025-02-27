<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Menu;
use App\Livewire\Catering;
use App\Livewire\Services\Foodtruck;
use App\Livewire\Services\Photobooth;
use App\Livewire\Services\Music;
use App\Livewire\Merch;
use App\Livewire\Contact;

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
    return view('dashboard');
})->name('dashboard');

Route::get('/menu', Menu::class)->name('menu');
Route::get('/catering', Catering::class)->name('catering');

// Services Routes
Route::prefix('services')->group(function () {
    Route::get('/foodtruck', Foodtruck::class)->name('services.foodtruck');
    Route::get('/photobooth', Photobooth::class)->name('services.photobooth');
    Route::get('/music', Music::class)->name('services.music');
});

Route::get('/merch', Merch::class)->name('merch');
Route::get('/contact', Contact::class)->name('contact');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';