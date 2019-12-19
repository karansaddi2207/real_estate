@extends('admin/layouts/app')

@section('main_content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New State Form
        <small>State</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">States</a></li>
        <li class="active">Add States</li>
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
            <form method="post" action="{{ url('/admin/state') }}">@csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">State</label>
                  <input type="text" name="state" class="form-control" id="exampleInputEmail1" placeholder="Enter state">
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