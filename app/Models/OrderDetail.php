<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $guarded = [];
    public function detail()
    {
        return $this->belongsTo(Order::class);
    }
}
