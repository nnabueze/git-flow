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
           <h3>44</h3>

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
             <h3>150</h3>

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
      <div class="box-header">
        <h3 class="box-title">Last Five Registration</h3>

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
            <th>ID</th>
            <th>User</th>
            <th>Unique Idntification</th>
            <th>Date</th>
            <th>Status</th>
            <th>Reason</th>
          </tr>
          <tr>
            <td>183</td>
            <td>John Doe</td>
            <td>4784JD94NDFI</td>
            <td>11-7-2014</td>
            <td><span class="label label-success">Completed</span></td>
            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
          </tr>
          <tr>
            <td>219</td>
            <td>Alexander Pierce</td>
            <td>4784JD94NDFI</td>
            <td>11-7-2014</td>
            <td><span class="label label-warning">Pending</span></td>
            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
          </tr>
          <tr>
            <td>657</td>
            <td>Bob Doe</td>
            <td>4784JD94NDFI</td>
            <td>11-7-2014</td>
            <td><span class="label label-success">Completed</span></td>
            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
          </tr>
          <tr>
            <td>175</td>
            <td>Mike Doe</td>
            <td>4784JD94NDFI</td>
            <td>11-7-2014</td>
            <td><span class="label label-warning">Pending</span></td>
            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
          </tr>
          <tr>
            <td>175</td>
            <td>Mike Doe</td>
            <td>4784JD94NDFI</td>
            <td>11-7-2014</td>
            <td><span class="label label-warning">Pending</span></td>
            <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
          </tr>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>


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
                text: 'Last Month Registration'
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
                    y: 56.33
                }, {
                    name: 'Pending',
                    y: 24.03,
                    sliced: true,
                    selected: true
                }]
            }]
        });
   


</script>

@endpush