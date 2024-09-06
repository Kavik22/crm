<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\State;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Order $order)
    {
        $users = User::all();
        $states = State::all();
        $products = Product::all();
        $order_products_ids = [];
        foreach ($order->products as $product) {
            $order_products_ids[] = $product->id;
        };
        return view('order.edit', compact('users', 'order', 'products', 'order_products_ids', 'states'));
    }
}
