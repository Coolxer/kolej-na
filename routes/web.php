<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QueueController;
use App\Models\Queue;

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
    return view('landing/landing');
})->name('home');

Route::get('/panel', function () {
    return view('dashboard.dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/panel/profil', function () {
    return view('dashboard.profile');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard-profile');

Route::get('/panel/kolejki', [QueueController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard-queues-index');

Route::get('/panel/kolejki/{id}', [QueueController::class, 'show'])->name(
    'dashboard-queues-show',
);

Route::get('/panel/kolejki/{id}', [QueueController::class, 'update'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard-queues-update');

Route::get('/panel/subskrypcja', function () {
    return view('dashboard.subscription');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard-subscription');

require __DIR__ . '/auth.php';
