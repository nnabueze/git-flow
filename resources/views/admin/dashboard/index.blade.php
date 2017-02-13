@extends('admin')
@section('content')

   <section class="content-header">
     <h1>
       Dashboard
       <small>Control panel</small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li class="active">Dashboard</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">
     <!-- Small boxes (Stat box) -->
     <div class="row">
     <div class="col-lg-4 col-xs-6">
       <!-- small box -->
       <div class="small-box bg-yellow">
         <div class="inner">
           <h3>{{$complete_count}}</h3>

           <p>Completed Registrations</p>
         </div>
         <div class="icon">
           <i class="ion ion-person-add"></i>
         </div>
         <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
       </div>
     </div>
     <!-- ./col -->

       <div class="col-lg-4 col-xs-6">
         <!-- small box -->
         <div class="small-box bg-aqua">
           <div class="inner">
             <h3>{{$pending_count}}</h3>

             <p>Pending Registrations</p>
           </div>
           <div class="icon">
             <i class="ion ion-bag"></i>
           </div>
           <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         </div>
       </div>
       <!-- ./col -->
       <div class="col-lg-4 col-xs-6">
         <!-- small box -->
         <div class="small-box bg-green">
           <div class="inner">
             <h3>53<sup style="font-size: 20px">%</sup></h3>

             <p>Notification</p>
           </div>
           <div class="icon">
             <i class="ion ion-stats-bars"></i>
           </div>
           <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         </div>
       </div>
       <!-- ./col -->

     </div>
     <!-- /.row -->





<div class="row">
  <div class="col-xs-8">
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
            </tr>
          </thead>
          <tbody>
          @foreach($register as $register)
            <tr>
              <td>{{$register->name}}</td>
              <td>{{$register->surname}}</td>
              <td>{{$register-> phone}}</td>
              <td>{{$register->email}}</td>
              @if($register->status == 0)
              <td><span class="label label-warning">Pending</span></td>
              @else
              <td><span class="label label-success">Completed</span></td>
              @endif
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
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
 


  <div class="col-md-4">
  <div id="con" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
    </div>
    <!-- /.col -->
</div>


   </section>
   <!-- /.content -->
@stop

@push('scripts')

<script type="text/javascript">
        // Build the chart
        Highcharts.chart('con', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Total Registration'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: 'Completed',
                    y: {{$complete_count}}
                }, {
                    name: 'Pending',
                    y: {{$pending_count}},
                    sliced: true,
                    selected: true
                }]
            }]
        });


  //dashboard datatable
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