<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\StoreRequest;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $productsIds = $data['products'];
        unset($data['products']);

        $order = Order::firstOrCreate($data);

        foreach ($productsIds as $productId) {
            OrderProduct::firstOrCreate([
                'order_id' => $order->id,
                'product_id' => $productId,
            ]);
        }

        return redirect()->route('order.index');
    }
}
