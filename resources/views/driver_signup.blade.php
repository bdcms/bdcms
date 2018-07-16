
@extends('master.master')
@section('content')

	<section class="section_class">
		<div class="container">
			<div class="row"> 
				<div class="col-lg-9 col-md-9 col-sm-6 col-xs-12"> 
					 
					<div class="clear custom_row">
						<div class="section_heading section_content">
							<h4>Submit your application as a driver</h4>
						</div>
						<div class="section_content section_content signup_section">
							<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{url('/driSingup')}}">   
								{{csrf_field()}}
								<p>Personal Information</p>
								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> Name:</label>
								    <div class="controls">
								    	<input type="text" name="name"  placeholder="Name" value="{{old('name')}}">  
								    	<span class="err-msg text-danger">{{$errors->first('name')}}</span>
								    </div>
								</div>
								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> F-Name:</label>
								    <div class="controls">
								    	<input type="text" name="fname"  placeholder="F-Name" value="{{old('fname')}}">
								    	<span class="err-msg text-danger">{{$errors->first('fname')}}</span>
								    </div>
								</div>
								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> NID No:</label>
								    <div class="controls">
								    	<input type="number" name="nid"  placeholder="Nid number" value="{{old('nid')}}">
								    	<span class="err-msg text-danger">{{$errors->first('nid')}}</span>
								    </div>
								</div>
								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> Contact No:</label>
								    <div class="controls">
								    	<input type="number" name="contact_no"  placeholder="Contact number" value="{{old('contact_no')}}">
								    	<span class="err-msg text-danger">{{$errors->first('contact_no')}}</span>
								    </div>
								</div>
								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> Email:</label>
								    <div class="controls">
								    	<input type="email" name="email"  placeholder="Email" value="{{old('email')}}">
								    	<span class="err-msg text-danger">{{$errors->first('email')}}</span>
								    </div>
								</div>
								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> password:</label>
								    <div class="controls">
								    	<input type="password" name="password"  placeholder="Password" value="{{old('password')}}">
								    	<span class="err-msg text-danger">{{$errors->first('password')}}</span>
								    </div>
								</div>
								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> Re-password:</label>
								    <div class="controls">
								    	<input type="password" name="password_confirmation"  placeholder="Re-password" value="{{old('password_confirmation')}}">
								    	<span class="err-msg text-danger">{{$errors->first('password_confirmation')}}</span>
								    </div>
								</div>
								<div class="control-group">
								    <label class="control-label">PassPort No:</label>
								    <div class="controls">
								    	<input type="text" name="passport"  placeholder="Passport number" value="{{old('passport')}}">
								    	<span class="err-msg text-danger">{{$errors->first('passport')}}</span>
								    </div>
								</div>
								<div class="control-group">
								    <label class="control-label"> <span class="text-danger">*</span> Licence No:</label>
								    <div class="controls">
								    	<input type="text" name="licence"  placeholder="Passport number" value="{{old('licence')}}">
								    	<span class="err-msg text-danger">{{$errors->first('licence')}}</span>
								    </div>
								</div> 
								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> Address:</label>
								    <div class="controls">
								    	<input type="text" name="address"  placeholder="Passport number" value="{{old('address')}}">
								    	<span class="err-msg text-danger">{{$errors->first('address')}}</span>
								    </div>
								</div> 
								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> Date of Birth:</label>
								    <div class="controls">
								    	<input type="date" name="dateofbirth" value="{{old('dateofbirth')}}">
								    	<span class="err-msg text-danger">{{$errors->first('dateofbirth')}}</span>
								    </div>
								</div>
								<div class="control-group">
								    <label class="control-label"><span class="text-danger">*</span> Gender:</label>
								    <div class="controls">
								    	<input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female">Female
								    	<span class="err-msg text-danger">{{$errors->first('gender')}}</span>
								    </div>
								</div>

								<div class="control-group">
								    <label class="control-label">Driver Profile Picture:</label>
								    <div class="controls">
								    	<input type="file" name="image" >
								    	<span class="err-msg text-danger">{{$errors->first('image')}}</span>
								    	<span> ( jpg,png,jpeg ) format are allow & file shold be less than 100kB.</span>
								    </div>
								</div>


								  <div class="control-group">
								  	 <label class="control-label"> </label>
								    <div class="controls"> 
								    	<button class="signinbtn" type="reset" class="btn">Reset</button>
								      <button class="signinbtn" type="submit" class="btn">Next Step</button>
								    	{{-- <a href="signup2.html">Next Step</a> --}}

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
	<!-- --------------------------------Welcome Section Exit--------------------------------- -->
@endsection