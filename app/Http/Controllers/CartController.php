<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request) {
        return view('welcome');
    
    }

    public function payment(Request $request) {
        \Midtrans\Config::$serverKey = 'SB-Mid-server-g-iAbH7h1cYuFMS1b11AUmrW';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            'credit_card' => array(
                'secure' => true
            ),
            'item_details' => array(
                [
                    'id' => 'a1',
                    'price' => '10000',
                    'quantity' => 1,
                    'name' => 'tahu'
                ]
            ),
            'customer_details' => array(
                'first_name' => $request->get('uname'),
                'last_name' => '',
                'email' => $request->get('mail'),
                'phone' => $request->get('number'),
            ),
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);

                
        return view('cart', ['snap_token'=>$snapToken]);
    }
    public function payment_post(Request $request){
        return $request;

    }
    
}
