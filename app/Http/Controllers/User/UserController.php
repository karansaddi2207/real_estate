<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Booking;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function booking(Request $request, $id)
    {
        //dd($request->all());
        // Set your secret key: remember to change this to your live secret key in production
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey('sk_test_QY4jsEKRBOS1VUpRcrJZIMrj');

        // Token is created using Checkout or Elements!
        // Get the payment token ID submitted by the form:
        $token = $_POST['stripeToken'];

        $charge = \Stripe\Charge::create([
            'amount' => $request->price * 100,
            'currency' => 'usd',
            'description' => 'Example charge',
            'source' => $token,
            'statement_descriptor' => 'Custom descriptor',
        ]);

    	$this->validate($request, [
    		'name' => 'required',
    		'phone' => 'required',
    		'email' => 'required'
    	]);

    	$user_id = Auth::id();

    	$booking = new Booking;
    	$booking->name = $request->name;
        $booking->property_id = $id;
    	$booking->email = $request->email;
    	$booking->phone = $request->phone;
        $booking->date_from = $request->book_from;
        $booking->date_to = $request->book_to;
    	$booking->user_id = $user_id;
    	$booking->save();

        return redirect(url('/'));
    }
}
