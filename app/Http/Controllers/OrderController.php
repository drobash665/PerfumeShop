<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function index()
    {
        // Получаем все заказы
        $orders = \App\Models\Order::all();

        // Возвращаем представление
        return view('orders.index', compact('orders'));
    }
    public function show(string $id)
    {
        // Подсчет общей суммы заказа (дублируем логику из поля amount)
        $total = DB::table('orders')
            ->selectRaw('SUM(order_items.unit_price * order_items.quantity) as total')
            ->join('order_items', 'orders.id', '=', 'order_items.order_id')
            ->join('fragrances', 'fragrances.id', '=', 'order_items.fragrance_id')
            ->where('orders.id', $id)
            ->first();

        return view('orders.order', [
            'order' => Order::with('fragrances')->find($id),
            'total' => $total
        ]);
    }
}
