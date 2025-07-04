<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
    return view('index');
});
Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/apropos', [PagesController::class, 'apropos'])->name('apropos');

Route::get('/service', [PagesController::class, 'service'])->name('service');

Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Route::get('/formation', [PagesController::class, 'formation'])->name('formation');

Route::get('/evenement', [PagesController::class, 'evenement'])->name('evenement');






