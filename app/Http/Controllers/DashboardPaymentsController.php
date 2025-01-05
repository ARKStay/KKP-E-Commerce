<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class DashboardPaymentsController extends Controller
{
    public function index(Request $request)
    {
        // Ambil data order dengan pembayaran yang belum diverifikasi
        $orders = Order::where('payment_status', 'pending')
                    ->when($request->search, function ($query) use ($request) {
                        return $query->where('order_number', 'like', '%' . $request->search . '%');
                    })
                    ->get();

        return view('dashboard.payments.index', compact('orders'));
    }
}
