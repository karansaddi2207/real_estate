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
            <form method="post" action="{{ url('/admin/properties',$property->id) }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{ method_field('PATCH') }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Property Address</label>
                  <input type="text" value="{{ $property->address }}" name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter Address">
                </div>
                <div class="form-group">
                  <label for="property_type">Property Type</label>
                  <select class="form-control" name="property_type">
                    <option disabled>Select Property Type</option>
                    <option @if($property->property_type=='For Rent') selected @endif>For Rent</option>
                    <option @if($property->property_type=='For Sale') selected @endif>For Sale</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="beds">No. Of Beds</label>
                  <select class="form-control" name="beds">
                    <option disabled>No. Of Beds</option>
                    <option @if($property->beds=='1') selected @endif>1</option>
                    <option @if($property->beds=='2') selected @endif>2</option>
                    <option @if($property->beds=='3') selected @endif>3</option>
                    <option @if($property->beds=='4') selected @endif>4</option>
                    <option @if($property->beds=='5') selected @endif>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="bathrooms">No. Of Bathrooms</label>
                  <select class="form-control" name="bathrooms">
                    <option disabled>No. Of Bathrooms</option>
                    <option @if($property->bathrooms=='1') selected @endif>1</option>
                    <option @if($property->bathrooms=='2') selected @endif>2</option>
                    <option @if($property->bathrooms=='3') selected @endif>3</option>
                    <option @if($property->bathrooms=='4') selected @endif>4</option>
                    <option @if($property->bathrooms=='5') selected @endif>5</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="bathrooms">State</label>
                  <select class="form-control" name="state">
                    <option disabled>Select State</option>
                    @foreach($states as $state)
                      <option value="{{ $state->id }}" @if($property['state']['name'] == $state->name) selected @endif>{{ $state->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="bathrooms">City</label>
                  <select class="form-control" name="city">
                    <option disabled>Select City</option>
                    @foreach($cities as $city)
                      <option value="{{ $city->id }}" @if($property['city']['name'] == $city->name) selected @endif>{{ $city->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="price">Property Price</label>
                  <input type="text" value="{{ $property->price }}" name="price" class="form-control" id="price" placeholder="Enter Price">
                </div>
                <div class="form-group">
                  <label for="image">Property Image</label>
                  <input type="file" name="image" id="image" placeholder="Select Image">
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