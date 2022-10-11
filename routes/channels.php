<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated dealer can listen to the channel.
|
*/

Broadcast::channel('App.Models.Dealer.{id}', function ($dealer, $id) {
    return (int) $dealer->id === (int) $id;
});
