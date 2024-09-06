<?php

namespace App\Http\Controllers\Main;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;

class IndexController extends Controller
{
    public function __invoke() {
        $user_count = User::count();
        $product_count = Product::count();
        $order_count = Order::count();
        return view('main.index', compact('user_count', 'product_count', 'order_count'));
    }
}
