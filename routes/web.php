<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\SubscriptionController;
use App\Http\Controllers\Dashboard\StatisticsController;
use App\Http\Controllers\QueueController;

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

// ###################################### LANDING ######################################

Route::get('/', function () {
    return view('landing/landing');
})->name('home');

// ###################################### USER DASHBOARD ######################################

Route::get('/panel', function () {
    return view('dashboard.user.default');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard.user');

Route::get('/panel/profil', [ProfileController::class, 'show'])->name(
    'dashboard.user.profile',
);

Route::get('/panel/subskrypcja', [SubscriptionController::class, 'show'])->name(
    'dashboard.user.subscription',
);

// ###################################### QUEUE ######################################

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

// ###################################### QUEST DASHBOARD ######################################

Route::get('/kolejka/{id}/sprzedawca', [
    ProfileController::class,
    'showForQuest',
])->name('dashboard.quest.dealer');

Route::get('/kolejka/{id}/statystyki', [
    StatisticsController::class,
    'show',
])->name('dashboard.quest.statistics');

// ###########################################################################################

require __DIR__ . '/auth.php';
