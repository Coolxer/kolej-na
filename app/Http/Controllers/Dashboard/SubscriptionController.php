<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    /**
     * Display info about owned subscription[dashboard/user/subscription]
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::user();

        return view('dashboard.user.subscription');
    }
}
