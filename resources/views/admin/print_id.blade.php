@extends('admin')
@section('content')

<section class="content-header">
 <h1>
   ID Card
   <small>Control panel</small>
 </h1>
 <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
   <li class="active">ID Card</li>
 </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>

                <th>Name</th>
                <th>Surname</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($complete as $client)
              <tr>
                <td>{{$client->name}}</td>
                <td>{{$client->surname}}</td>
                <td>{{$client-> phone}}</td>
                <td>{{$client->email}}</td>
                @if($client->status == 0)
                <td><span class="label label-warning">Pending</span></td>
                @else
                <td><span class="label label-success">Completed</span></td>
                @endif
                <td><a href="" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print Card"><span class="glyphicon glyphicon-print"></span></a></td>
              </tr>
            @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>


</section>
<!-- /.content -->
@stop
<!-- DataTables -->


@push('scripts')
<script>

  $("#example1").DataTable();
  $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false
  });

</script>
@endpush
