@extends('layout')
@section('content')
<style type="text/css">

	.stepwizard-step p {
	    margin-top: 10px;
	}

	.stepwizard-row {
	    display: table-row;
	}

	.stepwizard {
	    display: table;
	    width: 100%;
	    position: relative;
	}

	.stepwizard-step button[disabled] {
	    opacity: 1 !important;
	    filter: alpha(opacity=100) !important;
	}

	.stepwizard-row:before {
	    top: 14px;
	    bottom: 0;
	    position: absolute;
	    content: " ";
	    width: 100%;
	    height: 1px;
	    background-color: #ccc;
	    z-order: 0;

	}

	.stepwizard-step {
	    display: table-cell;
	    text-align: center;
	    position: relative;
	}
	.btn
	{
	        border-radius: 0px;
	}
	.btn-circle {
	       width: 56px;
	    height: 56px;
	    text-align: center;
	    padding: 12px 0;
	    font-size: 20px;
	    line-height: 1.428571429;
	    border-radius: 35px;
	    margin-top: -14px;
	    border: solid 3px #ccc !important;
	    opacity:1 !important;
	     -webkit-box-shadow:inset 0px 0px 0px 3px #fff !important; 
	     -moz-box-shadow:inset 0px 0px 0px 3px #fff !important;
	    -o-box-shadow:inset 0px 0px 0px 3px #fff !important;
	   -ms-box-shadow:inset 0px 0px 0px 3px #fff !important; 
	   box-shadow:inset 0px 0px 0px 3px #fff !important;
	      backgournd-color:#428bca;
	}

	.primary
</style>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url({{asset('front_template/images/baner4.jpg')}});" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>Client Registration Page</h1>
						<h2>Payment reference code will generated after registration</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<div id="fh5co-pricing">
	<div class="container">
	<div class="col-md-8 col-md-offset-2 ">
		<div class="stepwizard animate-box">
		<h2 class="text-center">Registration page</h2>
		</div>
		<br />
		@include("include.error")
		
		@if(Session::has('message'))
			@include("include.message")
		@else
		<form role="form" class="" method="POST" action="/register/store">
			{!! csrf_field() !!} 
			
			<div class="form-group animate-box">
			  <label for="exampleInputEmail1">Name</label>
			  <input type="text" class="form-control" name="name" placeholder="Enter Name">
			</div>
			<div class="form-group animate-box">
			  <label for="exampleInputPassword1">Surname</label>
			  <input maxlength="100" type="text" name="surname" class="form-control" placeholder="Enter Surname" />
			</div>
			<div class="form-group animate-box">
			  <label for="exampleInputPassword1">Phone</label>
			  <input maxlength="100" type="text" name="phone" class="form-control" placeholder="Enter Phone" />
			</div>
			<div class="form-group animate-box">
			  <label for="exampleInputPassword1">Email</label>
			  <input maxlength="100" type="text" name="email" class="form-control" placeholder="Enter email" />
			</div>
			<button type="submit" class="btn animate-box">Register</button>
		</form>
	@endif
	</div>
	</div>
	
</div>


@include('include.footer')

@stop

@push('scripts')
<script type="text/javascript">
	

	    var navListItems = $('div.setup-panel div a'),
	            allWells = $('.setup-content'),
	            allNextBtn = $('.nextBtn');

	    allWells.hide();

	    navListItems.click(function (e) {
	        e.preventDefault();
	        var $target = $($(this).attr('href')),
	            $item = $(this);
	        if (!$item.hasClass('disabled')) {        
	            //navListItems.removeClass('btn-primary').addClass('btn-default');
	            if($item.attr('id')!=$(navListItems[1]).attr('id'))
	            {
	                $(navListItems[1]).removeClass('btn-primary').addClass('btn-success');
	            }
	            //$('#item3').addClass('btn-success');
	            $item.addClass('btn-primary');
	            allWells.hide();
	            $target.show();
	            $target.find('input:eq(0)').focus();
	        }
	    });

	    allNextBtn.click(function(){
	        var curStep = $(this).closest(".setup-content"),
	            curStepBtn = curStep.attr("id"),
	            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
	            curInputs = curStep.find("input[type='text'],input[type='url'], input[type='password'], input[type='email']"),
	            isValid = true;

	        $(".form-group").removeClass("has-error");
	        for(var i=0; i<curInputs.length; i++){
	            if (!curInputs[i].validity.valid){
	                isValid = false;
	                $(curInputs[i]).closest(".form-group").addClass("has-error");
	            }
	        }

	        if (isValid)
	            nextStepWizard.removeAttr('disabled').trigger('click');
	    });

	    $('div.setup-panel div a.btn-primary').trigger('click');
	
</script>
@endpush