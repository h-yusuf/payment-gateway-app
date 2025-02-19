<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Midtrans\Snap;
use Midtrans\Config;
class PaymentController extends Controller
{
    public function checkout($id)
    {
        $product = Product::findOrFail($id);
        Config::$serverKey = config('services.midtrans.server_key');
        Config::$isProduction = false;
        
        $transaction = [
            'transaction_details' => [
                'order_id' => uniqid(),
                'gross_amount' => $product->price,
            ],
        ];
        
        $snapToken = Snap::getSnapToken($transaction);
        return view('checkout', compact('snapToken', 'product'));
    }
}
