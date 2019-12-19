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
