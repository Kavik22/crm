<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\State;
use App\Models\Product;

class Order extends Model
{
    protected $table = 'orders';
    protected $guarded = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_products', 'order_id', 'product_id');
    }
}
