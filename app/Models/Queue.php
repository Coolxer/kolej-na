<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    /**
     * Get the user that owns the queue.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the customers for the queue.
     */
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
