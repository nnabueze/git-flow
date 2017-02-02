@extends('admin')
@section('content')

   <section class="content-header">
     <h1>
       Pending Registration
       <small>Control panel</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li class="active">Pending Registration</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">pending Registration</h3>

        <div class="box-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive">
        <table class="table table-hover">
          <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Status</th>
          </tr>
          @if($register)
            @foreach($register as $register)
          <tr>
            <td>{{$register->name}}</td>
            <td>{{$register->surname}}</td>
            <td>{{$register->phone}}</td>
            <td>{{$register->address}}</td>
            <td>{{$register->gender}}</td>
           
            <td><span class="label label-warning">Pending</span></td>
            
          </tr>
            @endforeach
          @endif
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

@push('scripts')

