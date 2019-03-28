<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\Meal;


class OrderController extends Controller
{
    public function index()
    {
        return Order::all();
        return parent::formatResponse($orders, true, 200);
    }
    // public function create(Request $request)
    // {
    //     $order = new Order;
    //     $order->order_number = 3456543454;
    //     $order->order_status = 'ready';
    //     $order->order_status = 'Extra Extra Very Very Hot Sauce';

    //     $order->save();

    //     $user = User::find(1);
    //     $order->users()->attach($order);

    //     $meals = Meal::find([3,4]);
    //     $order->meals()->attach($order);

    //     return 'Success';
    // }
    public function store(Request $request)
    {
        $orders = Order::create($request->all());
        return response()->json($orders);
    }
}
