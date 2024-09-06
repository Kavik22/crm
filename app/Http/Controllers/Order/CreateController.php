<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use App\Models\State;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        $products = Product::all();
        $states = State::all();
        return view('order.create', compact('users', 'products', 'states'));
    }
}
