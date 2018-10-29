<!-- coures start here -->
<div class="coures">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-xs-12 hidden-xs">
				<div class="left">
					<h4>SEARCH</h4>
					<div class="search">
						<form class="form-horizontal" method="post">
							<fieldset>
								<div class="form-group">
									<input name="s" value="" class="form-control" placeholder="Search Keyword" type="text">
									<button type="submit" value="submit" class="btn">
										<i class="icofont icofont-search"></i>
									</button>
								</div>
							</fieldset>
						</form>
					</div>
				</div>	
				<div class="left">
					<h4>FILTERS</h4>
					<div class="filter">
						<ul class="list-unstyled">
							<li>
								<input type="radio"  name="info" class="checkclass checkbox-inline"/>Information Technology
							</li>
							<li>
								<input type="radio"  name="business" class="checkclass checkbox-inline"/>Business
							</li>
							<li>
								<input type="radio"  name="design" class="checkclass checkbox-inline"/>Web Design
							</li>
							<li>
								<input type="radio"  name="language" class="checkclass checkbox-inline"/>Language
							</li>
							<li>
								<input type="radio"  name="marketing" class="checkclass checkbox-inline"/>Marketing
							</li>
							<li>
								<input type="radio"  name="sales" class="checkclass checkbox-inline"/>Sales
							</li>
							<li>
								<input type="radio"  name="auto" class="checkclass checkbox-inline"/>Auto Mobile
							</li>
						</ul>
					</div>
					<h4>COST TYPE</h4>
					<div class="cost">
						<ul class="list-unstyled">
							<li>
								<input type="radio"  name="all" class="checkclass checkbox-inline"/>All
							</li>
							<li>
								<input type="radio"  name="free" class="checkclass checkbox-inline"/>Free
							</li>
							<li>
								<input type="radio"  name="paid" class="checkclass checkbox-inline"/>Paid
							</li>
						</ul>
					</div>
					<h3>SEARCH FILTERS</h3>
				</div>
				<div class="left">
					<h4>POPULAR COURSES</h4>
					<div class="popular">
						<div class="box">
							<img src="<?php echo FRONT_ASSETS; ?>images/p1.jpg" class="img-responsive" alt="img" title="img" />
							<p>Introduction to Mobile Application Develop..</p>
							<span>$39.00</span>
						</div>
						<div class="box">
							<img src="<?php echo FRONT_ASSETS; ?>images/p2.jpg" class="img-responsive" alt="img" title="img" />
							<p>Introduction to PHP Website Development</p>
							<span class="color">Free</span>
						</div>
						<div class="box">
							<img src="<?php echo FRONT_ASSETS; ?>images/p3.jpg" class="img-responsive" alt="img" title="img" />
							<p>Android Application Development</p>
							<span>$39.00</span>
						</div>
						<div class="box">
							<img src="<?php echo FRONT_ASSETS; ?>images/p1.jpg" class="img-responsive" alt="img" title="img" />
							<p>Introduction to Mobile Application Develop..</p>
							<span>$39.00</span>
						</div>
						<div class="box">
							<img src="<?php echo FRONT_ASSETS; ?>images/p2.jpg" class="img-responsive" alt="img" title="img" />
							<p>Introduction to PHP Website Development</p>
							<span class="color">Free</span>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-sm-9 col-xs-12 mainpage">
				<div class="col-sm-12 sort">
					<div class="col-md-6 col-sm-5">
						<h3>ALL COURSES</h3>
						<p>TOTAL 145 COURSES</p>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="form-group">
							<select id="input-sort" class="form-control selectpicker bs-select-hidden">
								<option value="" selected="selected">Select Categories</option>
								<option value="">1</option>
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
								<option value="">5</option>
							</select>
						</div>
					</div>
					<div class="col-md-2 col-sm-3 list hidden-xs">
						<div class="btn-group btn-group-sm">
							<button type="button" id="grid-view" class="btn btn-default btngrid" data-toggle="tooltip" title="Grid"><i class="fa fa-th-large" aria-hidden="true"></i></button>
							<button  type="button" id="list-view" class="btn btn-default btngrid" data-toggle="tooltip" title="List"><i class="fa fa-list-ul" aria-hidden="true"></i></button>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="all_courses_singleview.html">
									<img src="<?php echo FRONT_ASSETS; ?>images/01.jpg" class="img-responsive" alt="img" title="img" />
								</a>
							</div>
							<div class="caption">
								<h3>Technology <span class="price">$29.00</span></h3>
								<h4>Developing Mobiles Apps</h4>
								<h5>Developing Mobiles Apps <span class="price">$29.00</span></h5>
								<h6>Technology </h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla interdum ipsum malesuada arcu tristique, sit amet fringilla metus volutpat.</p>
								<ul class="list-inline">
									<li>
										<a href="#"><i class="icofont icofont-ui-user"></i>15</a>
									</li>
									<li>
										<a href="#"><i class="icofont icofont-comment"></i>10</a>
									</li>
									<li>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="all_courses_singleview.html">
									<img src="<?php echo FRONT_ASSETS; ?>images/02.jpg" class="img-responsive" alt="img" title="img" />
								</a>
							</div>
							<div class="caption">
								<h3>Photography <span class="price">$29.00</span></h3>
								<h4>Basic Nature Photography</h4>
								<h5>Basic Nature Photography <span class="price">$29.00</span></h5>
								<h6>Photography </h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla interdum ipsum malesuada arcu tristique, sit amet fringilla metus volutpat.</p>
								<ul class="list-inline">
									<li>
										<a href="#"><i class="icofont icofont-ui-user"></i>15</a>
									</li>
									<li>
										<a href="#"><i class="icofont icofont-comment"></i>10</a>
									</li>
									<li>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="all_courses_singleview.html">
									<img src="<?php echo FRONT_ASSETS; ?>images/03.jpg" class="img-responsive" alt="img" title="img" />
								</a>
							</div>
							<div class="caption">
								<h3>Busniss <span class="price">$29.00</span></h3>
								<h4>Market Management</h4>
								<h5>Market Management <span class="price">$29.00</span></h5>
								<h6>Business</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla interdum ipsum malesuada arcu tristique, sit amet fringilla metus volutpat.</p>
								<ul class="list-inline">
									<li>
										<a href="#"><i class="icofont icofont-ui-user"></i>15</a>
									</li>
									<li>
										<a href="#"><i class="icofont icofont-comment"></i>10</a>
									</li>
									<li>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="all_courses_singleview.html">
									<img src="<?php echo FRONT_ASSETS; ?>images/05.jpg" class="img-responsive" alt="img" title="img" />
								</a>
							</div>
							<div class="caption">
								<h3>Graphic Design <span class="price">$29.00</span></h3>
								<h4>Professional Logo Design</h4>
								<h5>Professional Logo Design <span class="price">$29.00</span></h5>
								<h6>Graphic Design</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla interdum ipsum malesuada arcu tristique, sit amet fringilla metus volutpat.</p>
								<ul class="list-inline">
									<li>
										<a href="#"><i class="icofont icofont-ui-user"></i>15</a>
									</li>
									<li>
										<a href="#"><i class="icofont icofont-comment"></i>10</a>
									</li>
									<li>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="all_courses_singleview.html">
									<img src="<?php echo FRONT_ASSETS; ?>images/06.jpg" class="img-responsive" alt="img" title="img" />
								</a>
							</div>
							<div class="caption">
								<h3>Adobe photoshop <span class="text">Free</span></h3>
								<h4>Photoshop Effects</h4>
								<h5>Photoshop Effects <span class="text">Free</span></h5>
								<h6>Adobe photoshop</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla interdum ipsum malesuada arcu tristique, sit amet fringilla metus volutpat.</p>
								<ul class="list-inline">
									<li>
										<a href="#"><i class="icofont icofont-ui-user"></i>15</a>
									</li>
									<li>
										<a href="#"><i class="icofont icofont-comment"></i>10</a>
									</li>
									<li>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="all_courses_singleview.html">
									<img src="<?php echo FRONT_ASSETS; ?>images/07.jpg" class="img-responsive" alt="img" title="img" />
								</a>
							</div>
							<div class="caption">
								<h3>Adobe photoshop <span class="price">$29.00</span></h3>
								<h4>Personal Busniss Card</h4>
								<h5>Personal Busniss Card <span class="price">$29.00</span></h5>
								<h6>Adobe photoshop</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla interdum ipsum malesuada arcu tristique, sit amet fringilla metus volutpat.</p>
								<ul class="list-inline">
									<li>
										<a href="#"><i class="icofont icofont-ui-user"></i>15</a>
									</li>
									<li>
										<a href="#"><i class="icofont icofont-comment"></i>10</a>
									</li>
									<li>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="all_courses_singleview.html">
									<img src="<?php echo FRONT_ASSETS; ?>images/04.jpg" class="img-responsive" alt="img" title="img" />
								</a>
							</div>
							<div class="caption">
								<h3>Technology <span class="price">$29.00</span></h3>
								<h4>Developing Mobiles Apps</h4>
								<h5>Developing Mobiles Apps <span class="price">$29.00</span></h5>
								<h6>Technology</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla interdum ipsum malesuada arcu tristique, sit amet fringilla metus volutpat.</p>
								<ul class="list-inline">
									<li>
										<a href="#"><i class="icofont icofont-ui-user"></i>15</a>
									</li>
									<li>
										<a href="#"><i class="icofont icofont-comment"></i>10</a>
									</li>
									<li>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="all_courses_singleview.html">
									<img src="<?php echo FRONT_ASSETS; ?>images/08.jpg" class="img-responsive" alt="img" title="img" />
								</a>
							</div>
							<div class="caption">
								<h3>Technology <span class="price">$29.00</span></h3>
								<h4>Convert PSD to HTML</h4>
								<h5>Convert PSD to HTML<span class="price">$29.00</span></h5>
								<h6>Technology</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla interdum ipsum malesuada arcu tristique, sit amet fringilla metus volutpat.</p>
								<ul class="list-inline">
									<li>
										<a href="#"><i class="icofont icofont-ui-user"></i>15</a>
									</li>
									<li>
										<a href="#"><i class="icofont icofont-comment"></i>10</a>
									</li>
									<li>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="all_courses_singleview.html">
									<img src="<?php echo FRONT_ASSETS; ?>images/09.jpg" class="img-responsive" alt="img" title="img" />
								</a>
							</div>
							<div class="caption">
								<h3>Adobe photoshop <span class="text">Free</span></h3>
								<h4>Marketing management</h4>
								<h5>Marketing management <span class="text">Free</span></h5>
								<h6>Adobe photoshop</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla interdum ipsum malesuada arcu tristique, sit amet fringilla metus volutpat.</p>
								<ul class="list-inline">
									<li>
										<a href="#"><i class="icofont icofont-ui-user"></i>15</a>
									</li>
									<li>
										<a href="#"><i class="icofont icofont-comment"></i>10</a>
									</li>
									<li>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="all_courses_singleview.html">
									<img src="<?php echo FRONT_ASSETS; ?>images/01.jpg" class="img-responsive" alt="img" title="img" />
								</a>
							</div>
							<div class="caption">
								<h3>Technology <span class="price">$29.00</span></h3>
								<h4>Developing Mobiles Apps</h4>
								<h5>Developing Mobiles Apps <span class="price">$29.00</span></h5>
								<h6>Technology</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla interdum ipsum malesuada arcu tristique, sit amet fringilla metus volutpat.</p>
								<ul class="list-inline">
									<li>
										<a href="#"><i class="icofont icofont-ui-user"></i>15</a>
									</li>
									<li>
										<a href="#"><i class="icofont icofont-comment"></i>10</a>
									</li>
									<li>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="all_courses_singleview.html">
									<img src="<?php echo FRONT_ASSETS; ?>images/02.jpg" class="img-responsive" alt="img" title="img" />
								</a>
							</div>
							<div class="caption">
								<h3>Photography <span class="price">$29.00</span></h3>
								<h4>Basic Nature Photography</h4>
								<h5>Basic Nature Photography <span class="price">$29.00</span></h5>
								<h6>Photography</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla interdum ipsum malesuada arcu tristique, sit amet fringilla metus volutpat.</p>
								<ul class="list-inline">
									<li>
										<a href="#"><i class="icofont icofont-ui-user"></i>15</a>
									</li>
									<li>
										<a href="#"><i class="icofont icofont-comment"></i>10</a>
									</li>
									<li>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="all_courses_singleview.html">
									<img src="<?php echo FRONT_ASSETS; ?>images/03.jpg" class="img-responsive" alt="img" title="img" />
								</a>
							</div>
							<div class="caption">
								<h3>Busniss <span class="price">$29.00</span></h3>
								<h4>Market Management</h4>
								<h5>Market Management<span class="price">$29.00</span></h5>
								<h6>Busniss</h6>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla interdum ipsum malesuada arcu tristique, sit amet fringilla metus volutpat.</p>
								<ul class="list-inline">
									<li>
										<a href="#"><i class="icofont icofont-ui-user"></i>15</a>
									</li>
									<li>
										<a href="#"><i class="icofont icofont-comment"></i>10</a>
									</li>
									<li>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
										<i class="icofont icofont-star"></i>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!--pagination code start here-->
					<div class="col-sm-12 col-xs-12">		
						<ul class="list-inline pagination">
							<li>
								<a href="#" aria-label="Previous">
									<i class="icofont icofont-bubble-left"></i>Prev
								</a>
							</li>
							<li class="active">
								<a href="#">01</a> 
							</li>
							<li>
								<a href="#">02</a> 
							</li>
							<li>
								<a href="#">03</a>
							</li>
							<li>
								<a href="#">04</a>
							</li>
							<li>
								<a href="#">...</a> 
							</li>
							<li>
								<a href="#">18</a> 
							</li>
							<li>
								<a href="#" aria-label="Next">Next<i class="icofont icofont-bubble-right"></i></a>
							</li>
						</ul>
					</div>
					<!--pagination code end here-->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- coures end here -->
<?php $this->load->view('includes/footer'); ?>