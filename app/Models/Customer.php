<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['first_name', 'last_name', 'phone', 'status'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id', 'queue_id', 'identify'];

    /**
     * Get the queue that owns the customer.
     */
    public function queue()
    {
        return $this->belongsTo(Queue::class);
    }
}
