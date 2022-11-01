<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Queue;

class QueueController extends Controller
{
    /**
     * Store a new Queue in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request...

        $queue = new Queue();

        // $queue->name = $request->name;

        $queue->save();
    }

    /**
     * Show the profile for a given queue.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // return view('user.profile', [
        //     'user' => User::findOrFail($id),
        // ]);
    }

    /**
     * Update the given queue.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Queue $queues)
    {
        if ($queues->delete()) {
            return true;
        }
    }

    public function index()
    {
        return view('queue.index', ['queues' => Queue::all()]);
    }
}
