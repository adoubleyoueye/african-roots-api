<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;


class OrderController extends Controller
{
    public function index()
    /**
     * Responds to requests to GET /orders
     * Shows all
     */
    {
        return Order::all();
        return parent::formatResponse($orders, true, 200);
    }

    public function store(Request $request)
    /**
     * Responds to requests to POST /meals
     * inserts new
     */
    {
        $orders = Order::create($request->all());
        return response()->json($orders);
    }
    public function update(Request $request, $id)
    /**
     * Responds to requests to PUT /orders/{id}
     * Shows specific page with matching id
     * saves updated
     */
    {
        $orders = Order::find($id);
        if (!$orders) {
            return response()->json([
                'success' => false,
                'message' => 'orders with id ' . $id . ' not found'
            ], 400);
        }

        $updated = $orders->fill($request->all())->save();
        if ($updated)
            return response()->json([
                'success' => true
            ]);
        else
            return response()->json([
                'success' => false,
                'message' => 'orders could not be updated'
            ], 500);
        }

    }
