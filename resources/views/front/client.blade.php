@extends('layout')
@section('content')


<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url({{asset('front_template/images/baner4.jpg')}});" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>Client Confirmation Page</h1>
						<h2>Enter payment reference code to complete registration</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<div id="fh5co-pricing">
	<div class="container">
		<div class="col-md-8 col-md-offset-2 ">
		<h2 class="animate-box">Confirmation Page</h2>
		<br/>
		<br/>
			<form class="form-inline animate-box" role="form">
				<div class="form-group">
					<label for="text">Reference Code:</label>
					<input type="text" class="form-control" id="email" placeholder="enter code">
				</div>
				<button type="submit" class="btn btn-learn btn-warning">Enter</button>
			</form>
		</div>
	</div>
	
</div>

@stop

