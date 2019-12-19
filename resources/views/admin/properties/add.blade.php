@extends('admin.layouts.app')

@section('main_content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Property Form
        <small>Properties</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Properties</a></li>
        <li class="active">Add Properties</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Add</h3>
            </div>
            <!-- /.box-header -->
            @include('admin.includes.msg')
            <!-- form start -->
            <form method="post" action="{{ url('/admin/properties') }}" enctype="multipart/form-data">@csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputName">Property Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Property Address</label>
                  <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter Address">
                </div>
                <div class="form-group">
                  <label for="exampleInputAge">Property Age</label>
                  <input type="number" name="age" class="form-control" id="exampleInputAge" placeholder="Enter Property Age">
                </div>
                <div class="form-group">
                  <label for="exampleInputDescription">Property Description</label>
                  <textarea name="description" id="exampleInputDescription" class="form-control" placeholder="Enter Description"></textarea>
                </div>
                <div class="form-group">
                  <label for="property_space">Property Space</label>
                  <select class="form-control" name="property_space" id="property_space">
                    <option selected disabled>Select Property Space</option>
                    <option>550 sq Foor</option>
                    <option>1550 sq Foor</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="property_type">Property Type</label>
                  <select class="form-control" name="property_type">
                    <option selected disabled>Select Property Type</option>
                    <option>For Rent</option>
                    <option>For Sale</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="air_conditioners">Air Conditioner</label>
                  <select class="form-control" id="air_conditioners" name="air_conditioners">
                    <option selected disabled>Select Air Conditioner</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="laundry_room">Laundry Room</label>
                  <select class="form-control" id="laundry_room" name="laundry_room">
                    <option selected disabled>Select Laundry Room</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="telephone">Telephone</label>
                  <select class="form-control" name="telephone">
                    <option selected disabled>Select Telephone</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="wifi">Wifi</label>
                  <select class="form-control" name="wifi">
                    <option selected disabled>Select Wifi</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="kitchen">Kitchen</label>
                  <select class="form-control" name="kitchen">
                    <option selected disabled>Select Kitchen</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="playground">Playground</label>
                  <select class="form-control" name="playground">
                    <option selected disabled>Select Playground</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="parking">Parking Space</label>
                  <select class="form-control" name="parking_space">
                    <option selected disabled>Select Parking Space</option>
                    <option>For Two Wheelers</option>
                    <option>For Three Wheelers</option>
                    <option>For Four Wheelers</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="transportation">Transportation</label>
                  <select class="form-control" name="transportation">
                    <option selected disabled>Select Transportation</option>
                    <option>Bus Stand</option>
                    <option>Railway Station</option>
                    <option>Airport</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="telephone">Telephone</label>
                  <select class="form-control" name="telephone">
                    <option selected disabled>Select Telephone</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="suitable_for">Suitable For</label>
                  <select class="form-control" name="suitable_for">
                    <option selected disabled>Select Suitable For</option>
                    <option>Individual</option>
                    <option>Family</option>
                    <option>Professional</option>
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="beds">No. Of Beds</label>
                  <select class="form-control" name="beds">
                    <option selected disabled>No. Of Beds</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="bathrooms">No. Of Bathrooms</label>
                  <select class="form-control" name="bathrooms">
                    <option selected disabled>No. Of Bathrooms</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="bathrooms">State</label>
                  <select class="form-control" name="state">
                    <option selected disabled>Select State</option>
                    @foreach($states as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                    @endforeach
                   
                  </select>
                </div>
                <div class="form-group">
                  <label for="bathrooms">City</label>
                  <select class="form-control" name="city">
                    <option selected disabled>Select City</option>
                    @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                    
                  </select>
                </div>
                <div class="form-group">
                  <label for="price">Property Price</label>
                  <input type="text" name="price" class="form-control" id="price" placeholder="Enter Price">
                </div>
                <div class="form-group">
                  <label for="image">Property Image</label>
                  <input type="file" name="image" id="image" placeholder="Select Image">
                </div>
                <div class="form-group">
                  <label for="image">Property Image1</label>
                  <input type="file" name="image1" id="image1" placeholder="Select Image">
                </div>
                <div class="form-group">
                  <label for="image">Property Image2</label>
                  <input type="file" name="image2" id="image2" placeholder="Select Image">
                </div>
                <div class="form-group">
                  <label for="image">Property Image3</label>
                  <input type="file" name="image3" id="image3" placeholder="Select Image">
                </div>
                <div class="form-group">
                  <label for="image">Property Image4</label>
                  <input type="file" name="image4" id="image4" placeholder="Select Image">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
       
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection