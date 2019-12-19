@extends('admin/layouts/app')

@section('main_content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Properties Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Properties tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title right">Hover Properties Table</h3>
              <a href="{{ url('admin/properties/create') }}" class="btn btn-danger col-lg-offset-8">Add New</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Address</th>
                  <th>Property Type</th>
                  <th>City</th>
                  <th>State</th>
                  <th>Beds</th>
                  <th>Bathrooms</th>
                  <th>Price</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($properties as $property)
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $property->address }}</td>
                  <td>{{ $property->property_type }}</td>
                  <td>{{ $property['city']['name'] }}</td>
                  <td>{{ $property['state']['name'] }}</td>
                  <td>{{ $property->beds }}</td>
                  <td>{{ $property->bathrooms }}</td>
                  <td>{{ $property->price }}</td>
                  <th><a href="{{ route('properties.edit',$property->id) }}" class="fa fa-edit"></a></th>
                  <th>
                    <form id="delete-property-{{ $property->id }}" method="post" action="{{ route('properties.destroy',$property->id) }}">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                    </form>
                    <a href="#" onClick="
                      if(confirm('Are you sure you want to delete this item?'))
                      {
                        event.preventDefault();
                        getElementById('delete-property-{{ $property->id }}').submit();
                      }
                      else
                      {
                        event.preventDefault();
                      }
                    ">
                      <span class="fa fa-trash"></span>
                    </a>
                  </th>
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection

@section('custom_scripts')

<script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

@endsection