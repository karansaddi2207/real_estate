<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Property;
use Image;
use Illuminate\Support\Facades\Input;
use App\Model\City;
use App\Model\State;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::with('state','city')->get();
       // $properties = json_decode(json_encode($properties),true);
        /*foreach($properties as $property)
        {
            echo $property['state']['id'];

        }*/
        //echo "<pre>";print_r($properties);
       // die;
        return view('admin.properties.show', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = State::all();
        $cities = City::all();
        return view('admin.properties.add', compact('cities','states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*echo "<echo>";
        print_r($request->all());die;*/
        $property = new Property;
        $property->name = $request->name;
        $property->address = $request->address;
        $property->beds = $request->beds;
        $property->bathrooms = $request->bathrooms;
        $property->price = $request->price;
        $property->property_type = $request->property_type;
        $property->state_id = $request->state;
        $property->city_id = $request->city;
        $property->description = $request->description;
        $property->property_space = $request->property_space;
        $property->property_age = $request->age;
        $property->air_conditioners = $request->air_conditioners;
        $property->telephone = $request->telephone;
        $property->suitable_for = $request->suitable_for;
        $property->wifi = $request->wifi;
        $property->laundry_room = $request->laundry_room;
        $property->playground = $request->playground;
        $property->kitchen = $request->kitchen;
        $property->parking_space = $request->parking_space;
        $property->transportation = $request->transportation;

        if($request->hasFile('image')  && $request->hasFile('image1')  && $request->hasFile('image2')  && $request->hasFile('image3')  && $request->hasFile('image4'))
        {
            $image_tmp = Input::file('image');
            $image_tmp1 = Input::file('image1');
            $image_tmp2= Input::file('image2');
            $image_tmp3 = Input::file('image3');
            $image_tmp4 = Input::file('image4');
            if($image_tmp->isValid() && $image_tmp1->isValid() && $image_tmp2->isValid() && $image_tmp3->isValid() && $image_tmp4->isValid())
            {
                $extension = $image_tmp->getClientOriginalExtension();
                $extension1 = $image_tmp1->getClientOriginalExtension();
                $extension2 = $image_tmp2->getClientOriginalExtension();
                $extension3 = $image_tmp3->getClientOriginalExtension();
                $extension4 = $image_tmp4->getClientOriginalExtension();
                $filename = rand(111,99999). '.' .$extension;
                $filename1 = rand(111,99999). '.' .$extension1;
                $filename2 = rand(111,99999). '.' .$extension2;
                $filename3 = rand(111,99999). '.' .$extension3;
                $filename4 = rand(111,99999). '.' .$extension4;
                $image_path = 'img/'. $filename;
                $image_path1 = 'img/'. $filename1;
                $image_path2 = 'img/'. $filename2;
                $image_path3 = 'img/'. $filename3;
                $image_path4 = 'img/'. $filename4;
                //resize image
                Image::make($image_tmp)->save($image_path);
                Image::make($image_tmp1)->save($image_path1);
                Image::make($image_tmp2)->save($image_path2);
                Image::make($image_tmp3)->save($image_path3);
                Image::make($image_tmp4)->save($image_path4);

                $property->img = $filename;
                $property->img1 = $filename1;
                $property->img2 = $filename2;
                $property->img3 = $filename3;
                $property->img4 = $filename4;
            }
        }

        $property->save();

        return redirect()->back()->with('msg','Entery added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::with('state','city')->where('id',$id)->first();
        $cities = City::all();
        $states = State::all();
        //echo "<pre>";print_r($property);die;
        return view('admin.properties.edit',compact('property','states','cities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //return $request->all();
        $property = Property::find($id);
        $property->address = $request->address;
        $property->beds = $request->beds;
        $property->bathrooms = $request->bathrooms;
        $property->price = $request->price;
        $property->property_type = $request->property_type;
        $property->state_id = $request->state;
        $property->city_id = $request->city;

        if($request->hasFile('image'))
        {
            $image_tmp = Input::file('image');
            if($image_tmp->isValid())
            {
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111,99999). '.' .$extension;
                $image_path = 'img/'.$filename;
                //resize
                Image::make($image_tmp)->save($image_path);
                $property->img = $filename;
            }
        }

        $property->save();

        return redirect()->back()->with('msg','Property item updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Property::find($id)->delete();
        return redirect()->back()->with('msg','Product deleted successfully!');
    }
}
