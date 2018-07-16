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
							<form class="form-horizontal" action="{{ url('appfrom2') }}">
								 {{csrf_field()}}
								<p>Car information</p> 
								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> Car Type:</label>
								    <div class="controls">
								    	<select class="control-select" name="carname_id"> 
										  	<option>Select One</option>
										  	@php
										  		$allcar = \DB::table('carnames')->get();
										  	@endphp
										  	@foreach ($allcar as $car) 
										  		<option value="{{$car->id}}">{{$car->car_name}}</option>
										  	@endforeach
										  	 
										</select>
										<span class="err-msg text-danger">{{$errors->first('carname_id')}}</span>

										<label class="control_level"><span class="text-danger">*</span> Wheel:</label>

										<select class="control-select"  name="car_wheel">
										  	<option>Select One</option>
										  	<option value="2">2</option>
										  	<option value="3">3</option>
										  	<option value="4">4</option>
										  	<option value="6">6</option>
										  	<option value="8">8</option> 
										  	<option value="10">10</option>
										  	<option value="12">12</option>
										  	<option value="up to 12">Up to 12 Wheel.</option>
										</select> 
										<span class="err-msg text-danger">{{$errors->first('car_wheel')}}</span>
								    </div>
								</div> 
								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> Car Chasis No:</label>
								    <div class="controls">
								    	<input type="text" name="car_chasis"  placeholder="Car Sasis number" value="{{old('car_chasis')}}">
								    	<span class="err-msg text-danger">{{$errors->first('car_chasis')}}</span>
								    </div>
								</div>
								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> Car Registration No:</label>
								    <div class="controls">
								    	<div>
								    		<input style="width:21.5%;" type="text" name="car_metro" id="car_metro" placeholder="Area" value="{{old('car_metro')}}"> 
								    		<span class="err-msg text-danger">{{$errors->first('car_metro')}}</span>
								    		<div id="areatatus"></div>
								    	</div>
								    	
								    	<div>
								    		<input style="width:21.5%;" type="text" name="car_key" id="keyword" placeholder="Charrecter" value="{{old('car_key')}}">
								    		<span class="err-msg text-danger">{{$errors->first('car_key')}}</span>
								    		<div id="keystatus"></div>
								    	</div>
								    	<input style="width:21.5%;" type="text" name="car_num"  placeholder="Number" value="{{old('car_num')}}">
								    	<span class="err-msg text-danger">{{$errors->first('car_num')}}</span>
								    </div>
								</div> 

								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> Registration Date:</label>
								    <div class="controls">
								    	<input type="date" name="car_reg_date" value="{{old('car_reg_date')}}">
								    	<span class="err-msg text-danger">{{$errors->first('car_reg_date')}}</span>
								    </div>
								</div>

								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> Color: </label>
								    <div class="controls">
								    	<select class="control-select" name="car_color">
										  	<option>Select One</option>
								    		<option value="Red">Red</option>
								    		<option value="Black">Black</option>
								    		<option value="Yellow">Yellow</option>
								    		<option value="White">White</option>
										</select> 
										<span class="err-msg text-danger">{{$errors->first('car_color')}}</span>
								    </div>
								</div>

								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> Insurence No:</label>
								    <div class="controls">
								    	<input type="text" name="car_insurence"  placeholder="Insurence number" value="{{old('car_insurence')}}">
								    	<span class="err-msg text-danger">{{$errors->first('car_insurence')}}</span>
								    </div>
								</div>

								<div class="control-group">
								    <label class="control-label">Road Permit No:</label>
								    <div class="controls">
								    	<input type="text" name="car_road_permit_no"  placeholder="Road permit number" value="{{old('car_road_permit_no')}}">
								    	<span class="err-msg text-danger">{{$errors->first('car_road_permit_no')}}</span>
								    </div>
								</div> 

								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> Engineen No:</label>
								    <div class="controls">
								    	<input type="text" name="car_engine_num"  placeholder="car Engineen number" value="{{old('car_engine_num')}}">
								    	<span class="err-msg text-danger">{{$errors->first('car_engine_num')}}</span>
								    </div>
								</div> 
								 
								<p>Driver information</p>
								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> Driver Identity:</label>
								    <div class="controls">
								    	<input type="number" name="user_mobile"  placeholder="Driver Number..." value="{{old('user_mobile')}}">
								    	<span class="err-msg text-danger">{{$errors->first('user_mobile')}}</span>
								    </div>
								</div> 
								  <div class="control-group">
								  	 <label class="control-label"> </label>
								    <div class="controls"> 
								      <button class="signinbtn" type="reset" class="btn">Reset</button>
								      <button class="signinbtn" type="submit" class="btn">Next Step</button>
								    	{{-- <a href="signup.html">Previous Step</a>
								    	<a href="signup3.html">Next Step</a> --}}
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