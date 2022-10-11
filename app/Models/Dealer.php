<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    /**
     * Get the queues for the dealer.
     */
    public function queues()
    {
        return $this->hasMany(Queue::class);
    }
}
