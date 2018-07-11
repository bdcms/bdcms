
@extends('master.master')
@section('content')
<!-- --------------------------------Login Section Start--------------------------------- --> 
<section class="login_section" style="background: url({{url('Frontend/')}}/images/slider/asd.jpg) no-repeat 0px 0px;background-size: cover;background-attachment: fixed;"> 
	<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
		<div class="row">
			<div class="login_wrap">
				<h6>BDCMS user login</h6>
				<div class="login_div">
				<div class="imag_login"><img src="{{url('Frontend/')}}/images/profile_img.jpg"></div>
					<form class="form-inline" method="post" action="{{url('checkLogin/')}}">
					  	<input type="email" class="input-small" name = "email" placeholder="Email">
					  	<input type="password" class="input-small" name="password" placeholder="Password">

					    <label>
					      <input type="checkbox"> <span> Remember me</span>
					    </label>
					 
					  	<button type="submit" class="btn sign_in_btn">Sign in</button>
					</form>
					<p><a href="">Forget Password</a> <a href="signup.html">Sign Up</a></p>
				</div>				
			</div>
		</div>
	</div>  
</section>
<!-- --------------------------------Login Section Exit--------------------------------- --> 
@endsection