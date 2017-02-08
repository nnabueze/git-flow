@extends('admin')
@section('content')

<section class="content-header">
	<h1>
		Pending Registration
		<small>Control panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">User Page</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-8">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Create User</h3>

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

						<tr>
							<td>hfjhfjf</td>
							<td>hdfjfdjfjf</td>
							<td>hfjfjf</td>
							<td>hfjfjf</td>
							<td>fjfjf</td>

							<td><span class="label label-warning">Pending</span></td>

						</tr>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->

		<div class="col-xs-4">
			<div class="panel panel-default">
			    <div class="panel-heading">User Page</div>
			    <div class="panel-body">
			        <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
			            {{ csrf_field() }}

			            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
			                <label for="name" class="col-md-4 control-label">Name</label>

			                <div class="col-md-6">
			                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

			                    @if ($errors->has('name'))
			                        <span class="help-block">
			                            <strong>{{ $errors->first('name') }}</strong>
			                        </span>
			                    @endif
			                </div>
			            </div>

			            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

			                <div class="col-md-6">
			                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

			                    @if ($errors->has('email'))
			                        <span class="help-block">
			                            <strong>{{ $errors->first('email') }}</strong>
			                        </span>
			                    @endif
			                </div>
			            </div>

			            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
			                <label for="password" class="col-md-4 control-label">Password</label>

			                <div class="col-md-6">
			                    <input id="password" type="password" class="form-control" name="password" required>

			                    @if ($errors->has('password'))
			                        <span class="help-block">
			                            <strong>{{ $errors->first('password') }}</strong>
			                        </span>
			                    @endif
			                </div>
			            </div>

			            <div class="form-group">
			                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

			                <div class="col-md-6">
			                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
			                </div>
			            </div>

			            <div class="form-group">
			                <div class="col-md-6 col-md-offset-4">
			                    <button type="submit" class="btn btn-primary">
			                        Register
			                    </button>
			                </div>
			            </div>
			        </form>
			    </div>
			</div>
		</div>
	</div>


</section>
<!-- /.content -->
@stop

@push('scripts')

