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
    // public function update(Request $request, $id)
    // {
    //     $orders = Order::find($id);
    //     if (!$orders) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'orders with id ' . $id . ' not found'
    //         ], 400);
    //     }

    //     $updated = $orders->fill($request->all())->save();

    //     if ($updated)
    //         return response()->json([
    //             'success' => true
    //         ]);
    //     else
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Product could not be updated'
    //         ], 500);
    // }
//     public function update(Request $request, $id)
// {
//     $orders = Order::find($id); //get the object of product you want to update
//     $product = new product;


//         if (!$orders) {
//                     return response()->json([
//                         'success' => false,
//                         'message' => 'orders with id ' . $id . ' not found'
//                     ], 400);
//                 }

//                 $updated = $orders->fill($request->all())->save();

//                 if ($updated)
//                     return response()->json([
//                         'success' => true
//                     ]);
//                 else
//                     return response()->json([
//                         'success' => false,
//                         'message' => 'Product could not be updated'
//                     ], 500);
//                     $orders->save();
//             }



public function update(Request $request, $id)
{
   $orders = Order::find($id);
//    $orders->user_id = auth()->id();
//    $orders->content = $request->content;
//    $orders->live = (boolean)$request->live;
// $input = $request->all();

        // $orders->fill($input)->save();
   $orders->customer_notes = $request->customer_notes;
   $orders->save();
}
// public function update(Request $request, $id)

// {

//     $this->validate($request, [

//         'customer_notes' => 'required',


//     ]);

//     Post::find($id)->update($request->all());

//     return redirect()->route('posts.index')

//                     ->with('success','Post updated successfully');

// }
// public function update(Request $request, $id)
// {
//     $this->validate($request, [
//     'order_status' => 'filled'
//      ]);
//     $orders = Order::find($id);
//     if($orders->fill($request->all())->save()){
//        return response()->json(['status' => 'success']);
//     }
//     return response()->json(['status' => 'failed']);
// }
    // }
    // $orders->name = $request['name'];
    //$orders->value = $request['value'];

}
