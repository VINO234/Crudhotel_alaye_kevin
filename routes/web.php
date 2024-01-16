<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ChambresController;
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
    return view('Accueil');
});


Route::get('/liste', [ChambresController::class, 'index']);
Route::get('/ajouter/create', [ChambresController::class, 'create'])->name('ajouter');
Route::post('/ajouter', [ChambresController::class, 'store'])->name('ajouter_traite');
Route::get('/liste/{id}', [ChambresController::class, 'show']);
Route::get('/liste/{id}/edit', [ChambresController::class, 'edit']);
Route::patch('/liste/{id}', [ChambresController::class, 'update']);
Route::delete('/liste/{id}', [ChambresController::class, 'destroy']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
