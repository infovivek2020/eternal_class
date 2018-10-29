<!-- contactus start here -->
<div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d219104.85983086875!2d75.71658808151895!3d30.90026973769041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a837462345a7d%3A0x681102348ec60610!2sLudhiana%2C+Punjab!5e0!3m2!1sen!2sin!4v1482266274532"></iframe>
</div>
<div class="contactus">
	<div class="container"> 
		<div class="row">
			<div class="col-sm-9 col-xs-12">
				<form method="post" enctype="multipart/form-data" class="form-horizontal">
					<h5>get in touch</h5>
					<hr />
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<label>Name*</label>
							<input name="name" value="" id="input-name" class="form-control" placeholder="John doe" type="text">
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<label>Email*</label>
							<input name="email" value="" id="input-email" class="form-control" placeholder="Johndoe@example.com" type="text">
						</div>
					</div>
					<div class="form-group">	
						<div class="col-md-12 col-sm-12 col-xs-12">
							<label>Website*</label>
							<input name="phone" value="" id="input-phone" class="form-control" placeholder="www.example.com" type="text">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<label>Message*</label>
							<textarea name="enquiry" id="input-enquiry" class="form-control"></textarea>
						</div>
					</div>
					<input class="btn btn-primary" value="Send Message" type="submit">
				</form>
			</div>
			<div class="col-sm-3 col-xs-12">
				<div class="address">
					<h5>Contact Info</h5>
					<hr>
					<p>Nunc quis viverra nibh. Etiam mauris leo, consequat ut tincidunt ac, lobortis consequat ligula.</p>
					<ul class="list-unstyled">
						<li>
							<i class="icofont icofont-home"></i> 14/3 Samrala Chownk, Main Road, Ludhiana 141001, India.
						</li>
						<li>
							<i class="icofont icofont-phone"></i> +91 123 456 7890
						</li>
						<li>
							<i class="icofont icofont-fax"></i> +00 123 456 7890
						</li>
						<li>
							<i class="icofont icofont-envelope"></i> <a href="#">educourses@example.com</a>
						</li>
						<li>
							<i class="icofont icofont-globe"></i> <a href="#">www.educourses.com</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- contactus end here -->
<?php $this->load->view('includes/footer'); ?>