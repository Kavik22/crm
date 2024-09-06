<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class State extends Model
{
    protected $table = 'states';
    protected $guarded = false;
    
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
