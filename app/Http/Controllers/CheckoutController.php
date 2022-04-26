<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {   
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51Ksk2HSF0wX6GIvmY42fN6yNNKdKqL3Q7pNsiSDVtL8eupFTh0vZi4zeOrZFwnQgf0WFb74fSSg3NsQJdOWKPkc600ngmTpJTY');
        		
		$amount = 100;
		$amount *= 1500;
        $amount = (int) $amount;
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'INR',
			'description' => 'Payment From pradipta',
			'payment_method_types' => ['card'],
		]);
		$intent = $payment_intent->client_secret;

		return view('checkout.credit-card',compact('intent'));

    }

    public function afterPayment()
    {
        echo 'Payment Has been Received';
    }
}
