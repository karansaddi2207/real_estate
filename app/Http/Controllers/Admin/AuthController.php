<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
    	//
    }

    public function login()
    {
    	return view('admin.auth.login');
    }

    public function loginUser(Request $request)
    {
    	$data = $request->all();
    	//dd($data);
    	$request->validate([
    		'email' => 'required|email',
    		'password' => 'required|min:8'
    	]);
    	//$data['password'] = bcrypt($data['password']);

    	$user = Admin::where('email', $data['email'])->get();

    	if(Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']]))
    	{
    		\Session::flash('success', 'Successfully logged in!');
    		return redirect('admin/home');
    	}
    	else
    	{
    		\Session::flash('success', 'Not logged in!');
    		return redirect()->back()->with('error', 'not logged in!');
    	}

    }

}
