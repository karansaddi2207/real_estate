@extends('admin/layouts/app')

@section('main_content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title right">Hover Data Table</h3>
              <a href="{{ url('admin/cities/create') }}" class="btn btn-danger col-lg-offset-8">Add New</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>City Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cities as $city)
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $city->name }}</td>
                  <th><a href="{{ route('cities.edit',$city->id) }}" class="fa fa-edit"></a></th>
                  <th>
                    <form id="delete-city-{{ $city->id }}" method="post" action="{{ route('cities.destroy',$city->id) }}">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                    </form>
                    <a href="#" onClick="
                      if(confirm('Are you sure you want to delete this item?'))
                      {
                        event.preventDefault();
                        getElementById('delete-city-{{ $city->id }}').submit();
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