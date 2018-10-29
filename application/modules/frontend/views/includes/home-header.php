<!-- header start here-->
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-12">
				<div id="logo">
					<a href="<?php echo PATHBASE; ?>">
						<img class="img-responsive" src="<?php echo FRONT_ASSETS; ?>images/logo.png" alt="logo" title="logo" />
					</a>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<!-- menu start here -->
				<div id="menu">	
					<nav class="navbar">
						<div class="navbar-header">
							<span class="menutext visible-xs">Menu</span>
							<button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="btn btn-navbar navbar-toggle" type="button">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</button>
						</div>
						<div class="collapse navbar-collapse navbar-ex1-collapse padd0">
							<ul class="nav navbar-nav text-right">
								<li>
									<a href="<?php echo PATHBASE; ?>">HOME</a>
								</li>
								<li>
									<a href="<?php echo PATHBASE; ?>about-us">about us</a>
								</li>
								<li>
									<a href="<?php echo PATHBASE; ?>notification">Notification</a>
								</li>
								<li>
									<a href="<?php echo PATHBASE; ?>mock-test">Mock Test</a>
								</li>
								<li class="dropdown hidden"><a href="#" class="dropdown-toggle" data-toggle="dropdown">All courses</a>
									<div class="dropdown-menu repeating">
										<div class="dropdown-inner">
											<ul class="list-unstyled">
												<li>
													<a href="all_courses.html">All courses</a>
												</li>
												<li>
													<a href="all_courses_singleview.html">Single course view</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="dropdown hidden"><a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES</a>
									<div class="dropdown-menu repeating">
										<div class="dropdown-inner">
											<ul class="list-unstyled">
												<li>
													<a href="login_register.html">Login and register</a>
												</li>
												<li>
													<a href="blog.html">Our Blog</a>
												</li>
												<li>
													<a href="blog_detail.html">Blog  Detail</a>
												</li>
												<li>
													<a href="our_team.html">Our Team</a>
												</li>
												<li>
													<a href="price_plan.html">Price Plan</a>
												</li>
												<li>
													<a href="error-404.html">404 error</a>
												</li>
												<li>
													<a href="faq.html">faq</a>
												</li>
												<li>
													<a href="comingsoon.html">Coming soon</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="dropdown hidden"><a href="#" class="dropdown-toggle" data-toggle="dropdown">events</a>
									<div class="dropdown-menu">
										<div class="dropdown-inner">
											<ul class="list-unstyled">
												<li>
													<a href="event.html">events</a>
												</li>
												<li>
													<a href="event-view.html">event view</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<a href="<?php echo PATHBASE; ?>contact-us">contact us</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
				<!-- menu end here -->
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<ul class="list-inline icon pull-right">
					<li>
						<form class="form-horizontal" method="post" id="srch">
							<fieldset>
								<div class="form-group">
									<input name="s" value="" class="form-control" placeholder="Search" type="text">
								</div>
								<button type="submit" value="submit" class="btn">
									<i class="icofont icofont-search"></i>
								</button>
							</fieldset>
						</form>
					</li>
					<li>
						<button type="button" class="btn-primary">Start free a trail</button>
					</li>
				</ul>
			</div>
		</div>
	</div>
</header>
<!-- header end here -->