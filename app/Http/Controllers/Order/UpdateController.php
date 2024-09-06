<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\UpdateRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Order $order)
    {
        $data = $request->validated();
        $products = $data['products'];
        unset($data['products']);
        $order->update($data);
        $order->products()->sync($products);
        return view('order.show', compact('order'));
    }
}
