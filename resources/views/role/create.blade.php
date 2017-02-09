@extends('admin')
@section('content')

<section class="content-header">
	<h1>
		Role Page
		<small>Control panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Role Page</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-xs-8">
		@include("include.message")
		@include("include.error")
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Role User</h3>

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
							<th>S/N</th>
							<th>Name</th>
							<th>Display Name</th>
							<th>Description</th>
							<th>Action</th>
						</tr>
					<?php $i =1;?>
					@if($roles)
						@foreach($roles as $role)
						<tr>
							<td>{{$i}}</td>
							<td>{{$role->name}}</td>
							<td>{{$role->display_name}}</td>
							<td>{{$role->description}}</td>
							<td><a href="" class="btn btn-default btn-sm" data-toggle="tooltip" title="Edit"><span class="glyphicon glyphicon-eye-open"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/role/role_delete/{{$role->id}}" class="btn btn-default btn-sm" data-toggle="tooltip" title="Delete"><span class="glyphicon glyphicon-trash"></span></a></td>

						</tr>
						<?php $i++;?>
						@endforeach
					@endif
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
			        <form class="form-horizontal" role="form" method="POST" action="{{ url('/role/store') }}">
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

			            <div class="form-group{{ $errors->has('display_name') ? ' has-error' : '' }}">
			                <label for="name" class="col-md-4 control-label">Display Name</label>

			                <div class="col-md-6">
			                    <input id="name" type="text" class="form-control" name="display_name" value="{{ old('display_name') }}" required autofocus>

			                    @if ($errors->has('display_name'))
			                        <span class="help-block">
			                            <strong>{{ $errors->first('display_name') }}</strong>
			                        </span>
			                    @endif
			                </div>
			            </div>

			            <div class="form-group{{ $errors->has('display_name') ? ' has-error' : '' }}">
			                <label for="name" class="col-md-4 control-label">Select Permission</label>

			                <div class="col-md-6">
			                    <select class="form-control" name="permission[]" data-live-search="true" multiple>
			                    @if($permissions)
			                    	@foreach($permissions as $permission)
			                      <option value="{{$permission->id}}">{{$permission->name}}</option>
			                      	@endforeach
			                      	@else
			                      	<option value="">No Permission</option>
			                    @endif
			                    </select>
			                </div>
			            </div>

			            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
			                <label for="description" class="col-md-4 control-label">Description</label>

			                <div class="col-md-6">
			                    <textarea class="form-control" name="description" rows="5" >{{ old('description') }}</textarea>

			                    @if ($errors->has('description'))
			                        <span class="help-block">
			                            <strong>{{ $errors->first('description') }}</strong>
			                        </span>
			                    @endif
			                </div>
			            </div>

			            <div class="form-group">
			                <div class="col-md-6 col-md-offset-4">
			                    <button type="submit" class="btn btn-primary">
			                        Create Role
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

