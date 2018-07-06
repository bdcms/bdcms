@extends('master.master')
 @section('content')

	<section class="section_class">
		<div class="container">
			<div class="row"> 
				<div class="col-lg-9 col-md-9 col-sm-6 col-xs-12"> 
					<div class="custom_row clear">
						<div class="section_heading section_content">
							<h4>Guidelines for Complete Registration </h4>
						</div>
						<div class="section_content section_content">
							<p><span><i class="fa fa-circle"></i></span> Registration would be complete within 3 steps.</p>	 
							<p><span><i class="fa fa-circle"></i></span> profile will be active less than 7days.</p>	 
							<p><span><i class="fa fa-circle"></i></span> This first step only insert your personal information.</p>	 
							<p><span><i class="fa fa-circle"></i></span> Second step your Car & Driver information.</p>	 
							<p><span><i class="fa fa-circle"></i></span> Third step all of document upload.</p>	 
							<p><span><i class="fa fa-circle"></i></span> Be saved your password for login profile next time.</p>	 
							<p><span><i class="fa fa-circle"></i></span> Type your actual name which are provide NID.</p>	
							<p><span><i class="fa fa-circle"></i></span> Care fully insert Car Sasis NO, Enginee No. </p>	
							<p><span><i class="fa fa-circle"></i></span> Use contact number or email for profile login.</p>	 	
						</div>
						
					</div>
					<div class="clear">
						<div class="section_heading section_content">
							<h4>Application Step-2</h4>
						</div>
						<div class="section_content section_content signup_section">
							<form class="form-horizontal">
								 
								<p>Car information</p> 
								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> Car Type:</label>
								    <div class="controls">
								    	<select class="control-select" name="wheel_num"> 
										  	<option>Select One</option>
										  	<option value="Bus">Bus</option>
										  	<option value="Track">Track</option>
										  	<option value="Cargo">Cargo service</option>
										  	<option value="Container Transport">Container Transport</option>
										  	<option value="Motor Bike">Motor Bike</option>
										</select>

										<label class="control_level"><span class="text-danger">*</span> Wheel:</label>

										<select class="control-select"  name="name">
										  	<option>Select One</option>
										  	<option value="1">2</option>
										  	<option value="3">3</option>
										  	<option value="4">4</option>
										  	<option value="6">6</option>
										  	<option value="8">8</option>
										  	<option value="8">8</option>
										  	<option value="10">10</option>
										  	<option value="12">12</option>
										  	<option value="up to 12">Up to 12 Wheel.</option>
										</select> 
								    </div>
								</div> 
								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> Car Chasis No:</label>
								    <div class="controls">
								    	<input type="text" name="car_sasis"  placeholder="Car Sasis number">
								    </div>
								</div>
								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> Car Registration No:</label>
								    <div class="controls">
								    	<div><input style="width:21.5%;" type="text" name="car_num" id="district_metro" placeholder="Area"> 
								    	<div id="areatatus"></div>
								    	</div>
								    	
								    	<div><input style="width:21.5%;" type="text" name="car_num" id="keyword" placeholder="Charrecter">
								    		<div id="keystatus"></div>
								    	</div>
								    	<input style="width:21.5%;" type="text" name="car_num"  placeholder="Number">
								    </div>
								</div>

								{{-- <div class="control-group">
								    <label class="control-label">Collor:</label>
								    <div class="controls-select">
								    	<select>
								    		<option>Select One</option>
								    		<option value="2">Red</option>
								    		<option value="2">Black</option>
								    		<option value="2">Yellow</option>
								    		<option value="2">Ass</option>
								    	</select>
								    </div>

								</div> --}}
								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> Color: </label>
								    <div class="controls">
								    	<select class="control-select" name="color">
										  	<option>Select One</option>
								    		<option value="2">Red</option>
								    		<option value="2">Black</option>
								    		<option value="2">Yellow</option>
								    		<option value="2">Ass</option>
										</select> 
								    </div>
								</div>

								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> Insurence No:</label>
								    <div class="controls">
								    	<input type="text" name="insurence_num"  placeholder="Insurence number">
								    </div>
								</div>

								<div class="control-group">
								    <label class="control-label">Road Permit No:</label>
								    <div class="controls">
								    	<input type="text" name="road_permit"  placeholder="Road permit number">
								    </div>
								</div> 

								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> Engineen No:</label>
								    <div class="controls">
								    	<input type="text" name="car_eng"  placeholder="car Engineen number">
								    </div>
								</div> 
								 
								<p>Driver information</p>
								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> Driver Identity:</label>
								    <div class="controls">
								    	<input type="number" name="driver_name"  placeholder="Driver Number...">
								    </div>
								</div> 
								  <div class="control-group">
								  	 <label class="control-label"> </label>
								    <div class="controls"> 
								      	<!-- <button class="signinbtn" type="reset" class="btn">Reset</button> -->
								      <!-- <button class="signinbtn" type="submit" class="btn">Next Step</button> -->
								    	<a href="signup.html">Previous Step</a>
								    	<a href="signup3.html">Next Step</a>
								    </div>
								  </div>
								</form>	
						</div>
						
					</div>
				</div>
				
				@include('master.inc.sidebar')
			</div>
		</div>
	</section>
	@endsection