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

// USER DASHBOARD
Route::get('/panel', function () {
    return view('dashboard.user.default');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard.user');

Route::get('/panel/profil', function () {
    return view('dashboard.user.profile');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard.user.profile');

Route::get('/panel/subskrypcja', function () {
    return view('dashboard.user.subscription');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard.user.subscription');

// ###################### QUEUE ######################

// Service Dealer requests
Route::resource('/panel/kolejki', QueueController::class, [
    'names' => [
        'index' => 'queue.user.index',
        'create' => 'queue.user.create',
        'store' => 'queue.user.store',
        'edit' => 'queue.user.edit',
        'update' => 'queue.user.update',
        'destroy' => 'queue.user.destroy',
        'show' => 'queue.user.show',
    ],
]);

// Route::match(['get', 'post'], '/{queue}/{id?}', [
//     QueueController::class,
//     'show',
// ])
//     ->where('queue', ['kolejka', 'kolejki'])
//     ->name('quest.queue.show');

Route::get('/kolejka/{id?}', [QueueController::class, 'showForQuest'])->name(
    'queue.quest.show',
);

Route::post('/kolejka/{id?}', [QueueController::class, 'search'])->name(
    'queue.quest.search',
);

// QUEST DASHBOARD
Route::get('/kolejka/{id}/sprzedawca', function () {
    return view('dashboard.quest.dealer');
})->name('dashboard.quest.dealer');

Route::get('/kolejka/{id}/statystyki', function () {
    return view('dashboard.quest.statistics');
})->name('dashboard.quest.statistics');

// #################################################

require __DIR__ . '/auth.php';
