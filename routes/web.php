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
    ->name('dashboard.profile');

// ###################### Queue ######################

// Service Dealer requests
Route::resource('/panel/kolejki', QueueController::class, [
    'names' => [
        'index' => 'dashboard.queue',
        'create' => 'dashboard.queue.create',
        'store' => 'dashboard.queue.store',
        'show' => 'dashboard.queue.show',
        'edit' => 'dashboard.queue.edit',
        'update' => 'dashboard.queue.update',
        'destroy' => 'dashboard.queue.destroy',
    ],
]);

// Route::match(['get', 'post'], '/{queue}/{id?}', [
//     QueueController::class,
//     'show',
// ])
//     ->where('queue', ['kolejka', 'kolejki'])
//     ->name('quest.queue.show');

Route::get('/kolejka/{id?}', [QueueController::class, 'show'])->name(
    'quest.queue.show',
);

Route::post('/kolejka/{id?}', [QueueController::class, 'search'])->name(
    'quest.queue.search',
);

// #################################################

Route::get('/panel/subskrypcja', function () {
    return view('dashboard.subscription');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard.subscription');

require __DIR__ . '/auth.php';
