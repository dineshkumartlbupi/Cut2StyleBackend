<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        $cart = Session::get('cart', []);

        if (empty($cart)) {
            return redirect()->route('user.dashboard')->with('error', 'Your cart is empty!');
        }

        $order = new Order();
        $order->user_id = Auth::id();
        $order->total_amount = array_sum(array_column($cart, 'quantity')) * 100; // Example calculation
        $order->status = 'pending';

        // Generate a unique order number, for example:
        $order->order_number = 'ORD-' . strtoupper(uniqid());

        $order->save();

        Session::forget('cart');

        return redirect()->route('user.dashboard')->with('success', 'Your order has been placed!');
    }

}
