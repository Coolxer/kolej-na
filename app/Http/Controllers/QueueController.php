<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Queue;

class QueueController extends Controller
{
    public function index()
    {
        return view('queue.index', ['queues' => Queue::all()]);
    }

    /**
     * Show the profile for a given queue [readonly view].
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return view('queue.show', [
            'queue' => Queue::findOrFail($id),
        ]);
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
        return view('queue.update', [
            'queue' => Queue::findOrFail($id),
        ]);
    }
}
