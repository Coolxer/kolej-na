<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\Queue;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the queue that owns the customer.
     */
    public function queue()
    {
        return $this->belongsTo(Queue::class);
    }
}
