
<!-- login start here -->
<div class="login">
	<div class="container"> 
		<div class="col-md-12 col-sm-12 col-xs-12 box padd0">
			<div class="col-md-6 col-sm-6 col-xs-12 bor">
				<h5>sign in</h5>
				<hr>
				<form method="post" enctype="multipart/form-data">
					<div class="form-group">	
						<label>Email*</label>
						<input type="text" name="email" value="" placeholder="Johndoe@example.com" id="input-email" class="form-control" />
					</div>
					<div class="form-group">
						<label>password*</label>
						<input type="text" name="password" value="" placeholder="********" id="input-password" class="form-control" />
					</div>
					<div class="links">
						<input type="checkbox"  name="credit" class="checkclass checkbox-inline"/>Remember me
						<a href="#" class="pull-right">Forgot Password?</a>
					</div>
					<button type="submit" class="btn btn-primary btn-block" >Login Now</button>
				</form>
				<div class="or">
					<span>OR</span>
					<hr/>
				</div>
				<ul class="list-unstyled">
					<li>
						<a href="https://www.facebook.com/" target="_blank" class="fb"><i class="fa fa-facebook"></i> Login Via Facebook</a>
					</li>
					<li>
						<a href="https://twitter.com/" target="_blank" class="tw"><i class="fa fa-twitter"></i> Login Via Twitter</a>
					</li>
				</ul>
				<div class="donot">Don't have an account? <a href="#">Create a New Account</a>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<h5>sign UP</h5>
				<hr>
				<form method="post" enctype="multipart/form-data">
					<div class="form-group">	
						<label>NAME*</label>
						<input type="text" name="name" value="" placeholder="Example : John Doe" id="input-name" class="form-control" />
					</div>
					<div class="form-group">	
						<label>Email*</label>
						<input type="text" name="email" value="" placeholder="Johndoe@example.com" id="email" class="form-control" />
					</div>
					<div class="form-group">
						<label>password*</label>
						<input type="text" name="password" value="" placeholder="********" id="password" class="form-control" />
					</div>
					<div class="form-group">
						<label>comfirm password*</label>
						<input type="text" name="confirmpassword" value="" placeholder="********" id="input-confirmpassword" class="form-control" />
					</div>
					<div class="links">
						<input type="checkbox"  name="credit" class="checkclass checkbox-inline"/>
						By register, I read & accept the terms.
					</div>
					<button type="submit" class="btn btn-primary btn-block" >Register now</button>
				</form>
				<div class="donot">
					Have an account? 
					<a href="#">Login Now</a>
				</div>
			</div>	
		</div>
	</div>
</div>
<!-- login end here -->
<?php $this->load->view('includes/footer'); ?>