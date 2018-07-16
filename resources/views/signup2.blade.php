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
							<h4>Application Step-final</h4>
						</div>
						<div class="section_content section_content signup_section">
							<form class="form-horizontal" action="{{url('appfrom3/')}}" method="post" enctype="multipart/form-data">
								<p>Car Photo</p>
								 
								<div class="control-group">
								    <label class="control-label">Car Photo:</label>
								    <div class="controls">
								    	<input type="file" name="car_pic" >
								    	<span class="err-msg text-danger">{{$errors->first('car_pic')}}</span>
								    	<span> ( jpg,png,jpeg ) format are allow & file shold be less than 100kB.</span>
								    </div>
								</div>

								<p>Profile Photo</p>
								 {{csrf_field()}}
								<div class="control-group">
								    <label class="control-label">Profile Photo:</label>
								    <div class="controls">
								    	<input type="file" name="image" >
								    	<span class="err-msg text-danger">{{$errors->first('image')}}</span>
								    	<span> ( jpg,png,jpeg ) format are allow & file shold be less than 100kB.</span>
								    </div>
								</div>
								<p>Upload all document</p> 
								 
								<div class="control-group">
								    <label class="control-label">All document's PDF:</label>
								    <div class="controls">
								    	<input type="file" name="document_pdf"  placeholder="Documents number">
								    	<span class="err-msg text-danger">{{$errors->first('document_pdf')}}</span>
								    	<span> ( scan a single PDF file by combind Driving Lisence, Road Permit, Insurence, Fitness certificate ) file shold be less than 250kB.</span>
								    </div>
								</div> 

								



								  <div class="control-group">
								  	 <label class="control-label"> </label>
								    <div class="controls"> 
								    	<a href="signup2.html">Previous Step</a>
								      <!-- <button class="signinbtn" type="reset" class="btn">Reset</button> -->
								      <button class="signinbtn" type="submit" class="btn">Complete</button>
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