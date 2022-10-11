<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    /**
     * Get the dealer that owns the queue.
     */
    public function dealer()
    {
        return $this->belongsTo(Dealer::class);
    }

    /**
     * Get the customers for the queue.
     */
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
