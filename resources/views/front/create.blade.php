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
	<div class="col-md-10 col-md-offset-1 ">
		<div class="stepwizard animate-box">
		    <div class="stepwizard-row setup-panel">
		 
		        <div class="stepwizard-step">
		            <a href="#ProfileSetup-step" type="button" class="btn btn-primary btn-circle" id="ProfileSetup-step-2">
		                <span class="glyphicon glyphicon-user"></span>
		            </a>
		            <p>ORGANISATION</p>
		        </div>
		        <div class="stepwizard-step">
		            <a href="#VerifyEmail-step" type="button" class="btn btn-success btn-circle" disabled="disabled">
		                <span class="glyphicon glyphicon-envelope"></span>
		            </a>
		            <p>BASIC INFORMATION</p>
		        </div>
		        <div class="stepwizard-step">
		            <a href="#Security-Setup-step" type="button"  class="btn btn-success-2 btn-circle"  disabled="disabled" id="Security-Setup-step-3">
		                <span class="glyphicon glyphicon-ok"></span>
		            </a>
		            <p>BIOMETRIC DATA </p>
		        </div>
		    </div>
		</div>
		@include("include.error")
		
		@if(Session::has('message'))
			@include("include.message")
		@else
		<form role="form" class="" method="POST" action="/register">
			{!! csrf_field() !!} 
		    <div class="row setup-content" id="ProfileSetup-step">
		        <div class="col-xs-12">
		            <div class="col-md-12">
		                 <br/>
		                <div class="form-horizontal">
		                
		                        <fieldset>
		                      
		                          <legend>Enter Your Profile Information</legend>
		                          <br/>
		                          <div class="form-group animate-box">
		                            <label class="col-sm-3 control-label" for="card-holder-name">Name</label>
		                            <div class="col-sm-9">
		                              <input  maxlength="100" type="text" name="name" class="form-control" placeholder="Enter Name"  />
		                            </div>
		                          </div>
		                          <div class="form-group animate-box">
		                            <label class="col-sm-3 control-label" for="card-number">Surname</label>
		                            <div class="col-sm-9">
		                             <input maxlength="100" type="text" name="surname" class="form-control" placeholder="Enter Surname" />
		                            </div>
		                          </div>
		                          <div class="form-group animate-box">
		                            <label class="col-sm-3 control-label" for="card-number">Phone Number</label>
		                            <div class="col-sm-9">
		                             <input maxlength="100" type="text" name="phone" class="form-control" placeholder="Enter Primary Phone Number" />
		                            </div>
		                          </div>
		                          <div class="form-group animate-box">
		                            <label class="col-sm-3 control-label" for="card-number">Address</label>
		                            <div class="col-sm-9">
		                             <input maxlength="100" type="text" name="address" class="form-control" placeholder="Enter Address" />
		                            </div>
		                          </div>
		                  
		                          <div class="form-group animate-box">
		                            <label class="col-sm-3 control-label" for="card-number">Gender</label>
		                            <div class="col-sm-9">
		                             <select class="form-control" name="gender" >
		                                  <option value="0">Select Gender</option>
		                                 <option value="Male">Male</option>
		                                 <option value="Female">female</option>
		                             </select>
		                            </div>
		                          </div>

		                          <div class="form-group animate-box">
		                            <label class="col-sm-3 control-label" for="card-number">Photograph</label>
		                            <div class="col-sm-9">
		                             <input maxlength="100" name="file" type="file" class="form-control" placeholder="Enter Address" />
		                            </div>
		                          </div>
		                        </fieldset>
		                
		                </div>
		                <button class="btn btn-primary nextBtn btn-lg pull-right animate-box" type="button" >Setup Profile</button>
		            </div>
		        </div>
		    </div>
		    <div class="row setup-content" id="VerifyEmail-step">
		        <div class="col-xs-12">
		            <div class="col-md-12">
		                 <br/>
		                <div class="form-horizontal">
		               
		                        <fieldset>
		                          <legend>Enter Your Organisation Information</legend>
		                          <br/>
		                          <div class="form-group animate-box">
		                            <label class="col-sm-3 control-label" for="card-holder-name">Name of Origisation</label>
		                            <div class="col-sm-9">
		                              <input  maxlength="100" type="text" name="name_company" class="form-control" placeholder="Enter Name of orginsation"  />
		                            </div>
		                          </div>
		                          <div class="form-group animate-box">
		                            <label class="col-sm-3 control-label" for="card-holder-name">Position</label>
		                            <div class="col-sm-9">
		                              <input  maxlength="100" type="text" name="position" class="form-control" placeholder="Enter Position"  />
		                            </div>
		                          </div>
		                          <div class="form-group  animate-box">
		                            <label class="col-sm-3 control-label" for="card-number">Office Phone</label>
		                            <div class="col-sm-9">
		                             <input  maxlength="100" type="text" name="company_phone" class="form-control" placeholder="Office Phone"  />
		                            </div>
		                          </div>
		                          <div class="form-group animate-box">
		                            <label class="col-sm-3 control-label" for="card-number">Office Email</label>
		                            <div class="col-sm-9">
		                             <input  maxlength="100" type="text" name="office_email" class="form-control" placeholder="Office Email"  />
		                            </div>
		                          </div>
		                        </fieldset>
		                    
		                </div>
		                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Setup Orginisation</button>
		            </div>
		        </div>
		    </div>
		    <div class="row setup-content" id="Security-Setup-step">
		        <div class="col-xs-12">
		            <div class="col-md-12">
		                <b>Thanks you  <stong>Muneeb Ashraf</stong></b>
		                <p>We are almost done, please enter the following information so we can recover your account in case you ever forget your password.</p>
		                
		                <div class="form-horizontal">
		                   
		                        <fieldset>
		                          <br/>
	
	

		                        </fieldset>
		                    
		                </div>
		                <!--h3> You are all set!</h3>
		                <p>Welcome to MetroPago. We are glade to have you here.</p-->
		                <button class="btn btn-primary btn-lg pull-right nextBtn" type="submit">Complete Registration</button>
		            </div>
		        </div>
		    </div>
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