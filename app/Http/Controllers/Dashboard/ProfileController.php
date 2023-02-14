<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Queue;

class ProfileController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['showForQuest']);
    }

    /**
     * Display logged in user data [dashboard/user/profile]
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::user();

        return view('dashboard.user.profile', ['user' => $user]);
    }

    /**
     * Display queue owner data (about dealer info useful for quest) [dashboard/quest/dealer]
     *
     * @param int  $id
     * @return \Illuminate\Http\Response
     */
    public function showForQuest($id = null)
    {
        $queue = Queue::where('identify', $id)->first();
        $dealer = $queue->user()->first();

        $dealerName = '';

        if ($dealer->company) {
            $dealerName = $dealer->company;
        } else {
            $dealerName = $dealer->first_name . ' ' . $dealer->last_name;
        }

        return view('dashboard.quest.dealer', [
            'queueName' => $queue->name,
            'link' => $queue->link,
            'dealerName' => $dealerName,
            // tel  ?
            // email ?
        ]);
    }
}
