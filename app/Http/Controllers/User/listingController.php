<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Property;
use App\Model\City;
use App\Model\State;

class listingController extends Controller
{                                                                                 
    public function index()
    {
    	$features = Property::with('city','state')->inRandomOrder()->simplePaginate(12);
    	return view('user.featured', compact('features'));
    }

    public function for_sale_listings()
    {
        $property_type = 'For Sale';
        $sales = Property::with('city', 'state')->where('property_type', $property_type)->inRandomOrder()->simplePaginate(12);
        //echo "<pre>";print_r($sales);die;
        return view('user.for_sale_listings', compact('sales'));
    }

    public function for_rent_listings()
    {
        $property_type = 'For Rent';
        $rentals = Property::with('city', 'state')->where('property_type', $property_type)->inRandomOrder()->simplePaginate(12);
        return view('user.for_rent_listings', compact('rentals'));
    }

    public function listing_details($id)
    {
    	$properties = Property::with('state','city')->inRandomOrder()->simplePaginate(4);
    	$property = Property::with('state','city')->find($id);
    	return view('user.listing_details',compact('property','properties'));
    }

    public function search(Request $request)
    {
    
        $name = $request->name;
        $features = Property::with('state','city')->where('address','LIKE','%'.$name.'%')->orWhere('name', 'LIKE', "%$name%")->simplePaginate(12);
        $cities = City::all();
        $states = State::all();
        return view('user.search', compact('features', 'states', 'cities'));
    }

    public function search_autocomplete()
    {
        $properties = Property::with('city','state')->get();
        foreach($properties as $property)
        {
            $array[] = array("label" => $property->address, "value" => $property->address);
            $array[] = array("label" => $property['state']['name'], "value" => $property->address);
            $array[] = array("label" => $property['city']['name'], "value" => $property->address);

            /*$array[] = $property->address;
            $array[] = $property['state']['name'];
            $array[] = $property['city']['name'];*/
        }
        return json_encode($array);
    }

    public function booking($id)
    {
        $id = $id;
        $property = Property::where('id',$id)->first();
        //return $property;
        return view('user.booking',compact('id','property'));
    }

}