
@extends('master.master')
@section('content')

			@if (session('msg'))
	            <div class="alert alert-success">
	                {{ session('msg') }}
	            </div>
	        @endif
	<!-- --------------------------------Slider Section Start--------------------------------- -->
	 
	<!-- --------------------------------Slider Section Exit--------------------------------- -->
	<!-- --------------------------------Welcome Section Start--------------------------------- --> 
	<section class="section_class">
		<div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
			@include('master.inc.slider')
			<div class="clear custom_row" style="background: url({{url('Frontend')}}/images/vvvf.jpg) no-repeat 0px 0px;background-size: cover;background-attachment: fixed;">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="container"> 
						<div class="row">
							<div class="car_number_search">
								<div class="col-lg-12 col-md-12 col-sm-12"><h3>Search car Details......</h3></div>
								 
								<form class="form-search">
									<div class="col-md-3"> 
										<div class="input_box_search">
								  			<input type="text" class="input-medium " placeholder="District.."> 
								  		</div>
									</div>
									<div class="col-md-3"> 
										<div class="input_box_search">
								  			<input type="text" class="input-medium " placeholder="Character.."> 
								  		</div>
									</div>
									<div class="col-md-6">  
								  		<div class="input_box_search">
								  			<input type="text" class="input-medium  search-query" placeholder="Car Number...">
								  			<!-- <button type="submit" class="btn search_btn">Search</button>  -->
								  			<a href="search_out.html">Search</a>
								  		</div>
									</div> 
								</form> 
							</div>	
						</div>	
					</div>	
				</div>
			</div>
			 
			<div class="clear custom_row">
				<div class="col-lg-12 col-md-12 col-sm-12"><h3>Short summery about BDCMS </h3></div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="row category_wrap">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="clear car_category_wrap">
								<div class="category_icon">
									<a href=""><img src="{{url('Frontend')}}/images/category/big-track.png"></a>
									<h6><a href="car_list.html">Big Truck</a></h6>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="clear car_category_wrap">
								
								<p><a href="#">Total Car: <span>1238</span></a></p>
								<p><a href="#">Black List: <span>138</span></a></p>
								<p><a href="#">White List: <span>1138</span></a></p>
								<p><a href="#">Tax Expiring: <span>123</span></a></p>
								<p><a href="#">Insurence Expiring: <span>234</span></a></p>
							</div>
						</div>
					</div> 
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="row category_wrap">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="clear car_category_wrap">
								<div class="category_icon">
									<a href=""><img src="{{url('Frontend')}}/images/category/vihicel.png"></a>
									<h6><a href="car_list.html">Large Vehicle</a></h6>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="clear car_category_wrap">
								
								<p><a href="#">Total Car: <span>1238</span></a></p>
								<p><a href="#">Black List: <span>138</span></a></p>
								<p><a href="#">White List: <span>1138</span></a></p>
								<p><a href="#">Tax Expiring: <span>123</span></a></p>
								<p><a href="#">Insurence Expiring: <span>234</span></a></p>
							</div>
						</div>
					</div> 
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="row category_wrap">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="clear car_category_wrap">
								<div class="category_icon">
									<a href=""><img src="{{url('Frontend')}}/images/category/motorbiak.png"></a>
									<h6><a href="car_list.html">Motorbike</a></h6>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="clear car_category_wrap">
								
								<p><a href="#">Total Car: <span>1238</span></a></p>
								<p><a href="#">Black List: <span>138</span></a></p>
								<p><a href="#">White List: <span>1138</span></a></p>
								<p><a href="#">Tax Expiring: <span>123</span></a></p>
								<p><a href="#">Insurence Expiring: <span>234</span></a></p>
							</div>
						</div>
					</div> 
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="row category_wrap">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="clear car_category_wrap">
								<div class="category_icon">
									<a href=""><img src="{{url('Frontend')}}/images/category/private-car.png"></a>
									<h6><a href="car_list.html">Private Car</a></h6>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="clear car_category_wrap">
								
								<p><a href="#">Total Car: <span>1238</span></a></p>
								<p><a href="#">Black List: <span>138</span></a></p>
								<p><a href="#">White List: <span>1138</span></a></p>
								<p><a href="#">Tax Expiring: <span>123</span></a></p>
								<p><a href="#">Insurence Expiring: <span>234</span></a></p>
							</div>
						</div>
					</div> 
				</div> 
				 

				

			</div>
			<div class="row custom_row"> 
					<div class="col-xsm-12 col-sm-12 col-md-12 col-lg-12">
						<div class="resum-skill-view">   
							<div id="features" class="section-our-capabilities l" > 
								<div id="chart-show"> 
									<div class="col-xsm-12 col-sm-3 col-md-3 col-lg-3 skill-loder">
										<div class="our-capabilities">	 
											<div class="one_third">  
												<div class="pie" data-percent="75" data-uk-scrollspy="{cls:'uk-animation-slide-top', delay:300, repeat: true}">
													<span>75 </span> %<br />		
												</div>  
											</div>
											<p>Tax Paid</p>
										</div>  
									</div>

									<div class="col-xsm-12 col-sm-3 col-md-3 col-lg-3 skill-loder">
										<div class="our-capabilities">	 
											<div class="one_third">  
												<div class="pie" data-percent="65" data-uk-scrollspy="{cls:'uk-animation-slide-top', delay:300, repeat: true}">
													<span>65 </span> %<br />		
												</div> 
											</div> 
											<p>Insurence Upto date</p>
										</div>  
									</div>
									<div class="col-xsm-12 col-sm-3 col-md-3 col-lg-3 skill-loder">
										<div class="our-capabilities">	 
											 <div class="one_third"> 
												<div class="pie" data-percent="75" data-uk-scrollspy="{cls:'uk-animation-slide-top', delay:300, repeat: true}">
													<span>75 </span> %<br />		
												</div>  
											</div>
											<p>Driving Lisence</p>
										</div>  
									</div>
									<div class="col-xsm-12 col-sm-3 col-md-3 col-lg-3 skill-loder">
										<div class="our-capabilities">	 
											 <div class="one_third">  
												<div class="pie" data-percent="90" data-uk-scrollspy="{cls:'uk-animation-slide-top', delay:300, repeat: true}">
													<span>75 </span> %<br />		
												</div>  
											</div> 
											<p>Average Clear</p>
										</div>  
									</div>   
								</div> 
							</div>  				
						</div> 
					</div> 
				</div>

		</div> <!-- Col-9 exit -->
		@include('master.inc.sidebar')
	</section>
	<!-- --------------------------------Welcome Section Exit--------------------------------- -->
@endsection