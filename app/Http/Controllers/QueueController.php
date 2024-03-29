<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Queue;

class QueueController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['search', 'show', 'showForQuest']);
    }

    /**
     * Display a listing of the queue.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('queue.user.index', ['queues' => Queue::all()]);
    }

    /**
     * Show the form for creating a new queue.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created queue in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified queue for logged user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = null)
    {
        if ($id) {
            $queue = Queue::where('identify', $id)->first();

            if ($queue) {
                return view('queue.user.show', ['queue' => $queue]);
            }

            return view('queue.user.404', ['id' => $id]);
        }

        return redirect()->route('queue.user.index');
    }

    /**
     * Display the specified queue for quest.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showForQuest($id = null)
    {
        if ($id) {
            $queue = Queue::where('identify', $id)->first();

            if ($queue) {
                $name = $queue->name;
                $customers = $queue->customers()->get();

                return view('queue.quest.show', [
                    'name' => $name,
                    'customers' => $customers,
                ]);
            }

            return view('queue.quest.404', ['id' => $id]);
        }

        return view('queue.quest.search');
    }

    /**
     * Pass queue search id to show view (only for quest)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        return redirect()->route('queue.quest.show', $request->queueSearchID);
    }

    /**
     * Show the form for editing the specified queue.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $queue = Queue::where('identify', $id)->first();

        if ($queue) {
            return view('queue.user.edit');
        }

        return view('queue.quest.404');

        // no queue found (if dealer type in address bar something manually)
    }

    /**
     * Update the specified queue in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified queue from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
