<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Property;
use DB;
use App\Model\State;
use App\Model\City;
use App\Model\Feedbacks;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $properties = Property::with('city','state')->orderBy('id','desc')->paginate(4);
        //$properties = json_decode(json_encode($properties));
        //echo "<pre>";print_r($properties);die;

        $features = Property::with('city','state')->inRandomOrder()->paginate(6);
        //$features = json_decode(json_encode($features));

        $cities = City::all();
        $states = State::all();

        return view('user.home', compact('properties','features','cities','states'));
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function about()
    {
        return view('user.about');
    }

    public function feedback(Request $request)
    {
        $feedback = new Feedbacks;
        if(Auth::check())
        {
            $id = Auth::user()->id;
            $feedback->user_id = $id;
        }
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->message = $request->message;
        $feedback->save();

        return redirect('/');
    }

}
