@extends('admin/layouts/app')

@section('main_content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New User Form
        <small>Users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Users</a></li>
        <li class="active">Add User</li>
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
            <form method="post" action="{{ url('/admin/users') }}">@csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">User name</label>
                  <input type="text" name="name" class="form-control" id="username" placeholder="Enter User name">
                </div>

                <div class="form-group">
                  <label for="email">User Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Enter User Email">
                </div>

                <div class="form-group">
                  <label for="password">User Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Enter User password">
                </div>

                <div class="form-group">
                  <label for="password_confirmation">Confirm Password</label>
                  <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm User Password">
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