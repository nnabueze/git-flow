@extends('layout')
@section('content')

<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url({{asset('front_template/images/banner.jpg')}});" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<div class="display-t">
					<div class="display-tc animate-box" data-animate-effect="fadeIn">
						<h1>The Nigerian Union of Journalists (NUJ),..</h1>
						<p><a class="btn btn-primary btn-lg btn-learn" href="/register/create"><i class="icon-play"></i>Register</a> <a class="btn btn-primary btn-lg btn-video" href="/register/client"><i class="icon-play"></i> Already Registered</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>



<!-- <div id="fh5co-explore" class="fh5co-bg-section">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<h2>Take A Course</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
			</div>
		</div>
	</div>		
	<div class="fh5co-explore fh5co-explore1">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-push-5 animate-box">
					<img class="img-responsive" src="images/work_1.png" alt="work">
				</div>
				<div class="col-md-4 col-md-pull-8 animate-box">
					<div class="mt">
						<h3>We Want You To Learn English</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<ul class="list-nav">
							<li><i class="icon-check2"></i>Far far away, behind the word</li>
							<li><i class="icon-check2"></i>There live the blind texts</li>
							<li><i class="icon-check2"></i>Separated they live in bookmarksgrove</li>
						</ul>
						<p><a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i> Watch Video</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="fh5co-explore">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-pull-1 animate-box">
					<img class="img-responsive" src="{{ asset('front_template/images/work_1.png')}}" alt="work">
				</div>
				<div class="col-md-4 animate-box">
					<div class="mt">
						<div>
							<h4><i class="icon-user"></i>Real Project For Real Solutions</h4>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
						</div>
						<div>
							<h4><i class="icon-video2"></i>Real Project For Real Solutions</h4>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						</div>
						<div>
							<h4><i class="icon-shield"></i>Real Project For Real Solutions</h4>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->

<div id="fh5co-project">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h2>HISTORICAL BACKGROUND</h2>
				<p>The Nigerian Union of Journalists (NUJ), was founded on March 15th 1955 in Lagos, the then Capital City of the Federal Republic of Nigeria. The union had some early nationalists with the fire of patriotism and nationalism burning in them and their writings included the first Governor General of Nigeria, the late Owelle of Onitsha, the Rt Hon (Dr.) Nnamdi Azikiwe, </p>
			</div>
		</div>
	</div>
<!-- 	<div class="container-fluid proj-bottom">
		<div class="row">
			<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
				<a href="#"><img src="{{asset('front_template/images/project-1.jpg')}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
					<h3>Web Master</h3>
					<span>View Course</span>
				</a>
			</div>
			<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
				<a href="#"><img src="{{asset('front_template/images/project-2.jpg')}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
					<h3>Virtual Assistant</h3>
					<span>View Course</span>
				</a>
			</div>
			<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
				<a href="#"><img src="{{asset('front_template/images/project-3.jpg')}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
					<h3>Read Bible</h3>
					<span>View Course</span>
				</a>
			</div>
			<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
				<a href="#"><img src="{{asset('front_template/images/project-9.jpg')}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
					<h3>Programming</h3>
					<span>View Course</span>
				</a>
			</div>
			<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
				<a href="#"><img src="{{asset('front_template/images/project-5.jpg')}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
					<h3>Technician</h3>
					<span>View Course</span>
				</a>
			</div>
			<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
				<a href="#"><img src="{{asset('front_template/images/project-6.jpg')}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
					<h3>Photography</h3>
					<span>View Course</span>
				</a>
			</div>
		</div>
	</div> -->
	<div class="container">
		<div class="row">
			<div class="features">
				<div class="col-md-4 animate-box">
					<!-- <h4>We have coolest features of this course</h4> -->
					<p>the first Premier of the defunct Western Region, the late Chief Obafemi Awolowo, the late Sardauna of Sokoto, Sir Ahmadu Bello and Alhaji Tafawa Balewa; the late Herbert Macaulay and Chief H. O. Davies who, with the launch of the Yoruba vernacular newspaper “Iwe Irohin ni Ede Yoruba”, founded by the late Rev. Ajayi Crowther in Abeokuta,   </p>
				</div>
				<div class="col-md-4 animate-box">
					<!-- <h4>Great teachers that we have</h4> -->
					<p>in 1929, wrote powerfully, in their newspapers, columns on the need for Nigeria's self-rule. The NUJ's birth was linked to the struggle for the independence of Nigeria. The struggle, it would be recalled gave birth to many protest groups, all yearning for the country's independence from the British. The groups came in various shades. Some were political in nature, like the Nigerian Youth Movement,  </p>
				</div>
				<div class="col-md-4 animate-box">
					<!-- <h4>Steps by steps turorial session</h4> -->
					<p>a platform for the nationalists. Others were trade unions and professional groups. It was established by some early Nationalists for an independent Nigeria via the power of the pen. However, between 1961-1969,the union failed to operate as a trade union and this lead to the union's name being removed from the list of the registered trade </p>
				</div>
			</div>
			<div class="col-md-12 text-center animate-box">
				<p><a class="btn btn-primary btn-lg btn-learn" href="#">Register</a></p>
			</div>
		</div>
	</div>
</div>

<div id="fh5co-steps">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h2>ETHICS FOR NIGERIAN JOURNALISTS</h2>
				<p>Journalism entails a high degree of public trust. To earn and maintain this trust, it is morally imperative for every journalist and every news medium to observe the highest professional and ethical standards. </p>
			</div>
		</div>

<!-- 		<div class="row bs-wizard animate-box" style="border-bottom:0;">
               
			<div class="col-xs-3 bs-wizard-step complete">
				<div class="text-center bs-wizard-stepnum"><h4>Step 1</h4></div>
				<div class="progress"><div class="progress-bar"></div></div>
				<a href="#" class="bs-wizard-dot"></a>
				<div class="bs-wizard-info text-center"><p>Create A Free Course</p></div>
			</div>

			<div class="col-xs-3 bs-wizard-step active">
				<div class="text-center bs-wizard-stepnum"><h4>Step 2</h4></div>
				<div class="progress"><div class="progress-bar"></div></div>
				<a href="#" class="bs-wizard-dot"></a>
				<div class="bs-wizard-info text-center"><p>Upload Content</p></div>
			</div>

			<div class="col-xs-3 bs-wizard-step disabled">
				<div class="text-center bs-wizard-stepnum"><h4>Step 3</h4></div>
				<div class="progress"><div class="progress-bar"></div></div>
				<a href="#" class="bs-wizard-dot"></a>
				<div class="bs-wizard-info text-center"><p>Make Your Course Beautiful</p></div>
			</div>

			<div class="col-xs-3 bs-wizard-step disabled">
				<div class="text-center bs-wizard-stepnum"><h4>Step 4</h4></div>
				<div class="progress"><div class="progress-bar"></div></div>
				<a href="#" class="bs-wizard-dot"></a>
				<div class="bs-wizard-info text-center"><p>Start Making Money</p></div>
			</div>
		</div> -->

	</div>
</div>

<!-- <div id="fh5co-testimonial" class="fh5co-bg-section">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<h2>Testimonials</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="row animate-box">
					<div class="owl-carousel owl-carousel-fullwidth">
						<div class="item">
							<div class="testimony-slide active text-center">
								<figure>
									<img src="{{asset('front_template/images/person_1.jpg')}}" alt="user">
								</figure>
								<span>Jean Doe, via <a href="#" class="twitter">Twitter</a></span>
								<blockquote>
									<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
								</blockquote>
							</div>
						</div>
						<div class="item">
							<div class="testimony-slide active text-center">
								<figure>
									<img src="{{asset('front_template/images/person_2.jpg')}}" alt="user">
								</figure>
								<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
								<blockquote>
									<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
								</blockquote>
							</div>
						</div>
						<div class="item">
							<div class="testimony-slide active text-center">
								<figure>
									<img src="{{asset('front_template/images/person_3.jpg')}}" alt="user">
								</figure>
								<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
								<blockquote>
									<p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->

<div id="fh5co-blog">
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h2>MISSION AND VISION STATEMENT</h2>
				<p>Journalism entails a high degree of public trust. To earn and maintain this trust, it is morally imperative for every journalist and every news medium to observe the highest professional and ethical standards. In the exercise of these duties, a </p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="{{asset('front_template/images/project-4.jpg')}}" alt=""></a>
					<div class="blog-text">
						<h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
						<span class="posted_on">Nov. 15th</span>
						<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div> 
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="{{asset('front_template/images/project-2.jpg')}}" alt=""></a>
					<div class="blog-text">
						<h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
						<span class="posted_on">Nov. 15th</span>
						<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div> 
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="fh5co-blog animate-box">
					<a href="#"><img class="img-responsive" src="{{asset('front_template/images/project-3.jpg')}}" alt=""></a>
					<div class="blog-text">
						<h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
						<span class="posted_on">Nov. 15th</span>
						<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<a href="#" class="btn btn-primary">Read More</a>
					</div> 
				</div>
			</div>
		</div>
	</div>
</div>


<div id="fh5co-started" style="background-image:url({{asset('front_template/images/img_bg_2.jpg')}});">
	<div class="overlay"></div>
	<div class="container">
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
				<h2>Lets Get Started</h2>
				<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
			</div>
		</div>
		<div class="row animate-box">
			<div class="col-md-8 col-md-offset-2 text-center">
				<p><a href="#" class="btn btn-default btn-lg">Create A Free Course</a></p>
			</div>
		</div>
	</div>
</div>
@include('include.footer')
@stop

@push('scripts')

@endpush
