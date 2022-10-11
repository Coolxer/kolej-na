<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * Get the queue that owns the customer.
     */
    public function queue()
    {
        return $this->belongsTo(Queue::class);
    }
}
