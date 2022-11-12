<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Queue;

class StatisticsController extends Controller
{
    /**
     * Display statistics about the queue (info useful for quest) [dashboard/quest/statistics]
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = null)
    {
        $queue = Queue::where('identify', $id)->first();

        $queueAmount = $queue->customers()->count();
        $dealerLastOnline = $queue->user()->first()->last_login_at;

        return view('dashboard.quest.statistics', [
            'amount' => $queueAmount,
            'latelyOnline' => $dealerLastOnline,
            // last queue status changed?
        ]);
    }
}
