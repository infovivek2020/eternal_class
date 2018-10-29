<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $title; ?></title>
<!-- Bootstrap stylesheet -->
<?php $this->load->view('includes/header-link'); ?>
</head>
<body>
<!--top start here -->
<div class="top">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<ul class="list-inline pull-left icon">
					<li>
						<a href="<?php echo PATHBASE; ?>contact-us"><i class="icofont icofont-exclamation-circle"></i>Help center</a>
					</li>
					<li>
						<a href="<?php echo PATHBASE; ?>faq"><i class="icofont icofont-support-faq"></i>faq</a>
					</li>
					<li>
						<!--language code start here-->
						<form  method="post" enctype="multipart/form-data" id="language">
							<div class="btn-group">
								<button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
									<span class="text"><i class="icofont icofont-globe"></i> Lang : English</span> <i class="icofont icofont-caret-down"></i>
								</button>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<a href="#"><img src="<?php echo FRONT_ASSETS; ?>images/flag.jpg" alt="english" title="english" /> English</a>
									</li>
								</ul>
							</div>
						</form>
						<!--language code end here-->
					</li>
				</ul>
				<ul class="list-inline pull-right icon">
					<li>
						<a href="<?php echo PATHBASE; ?>mock-test"><i class="icofont icofont-navigation-menu"></i>Mock Test</a>
					</li>
					<li>
						<a href="<?php echo PATHBASE; ?>signup"><i class="icofont icofont-key"></i>Login</a>
					</li>
					<li>
						<a href="<?php echo PATHBASE; ?>signup"><i class="icofont icofont-ui-user"></i>Register</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--top end here -->

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
<?php if($this->uri->segment(1)!=""){ ?>
<!-- bread-crumb start here -->
<div class="bread-crumb">
	<img src="<?php echo FRONT_ASSETS; ?>images/banner-top.jpg" class="img-responsive" alt="banner-top" title="banner-top">
	<div class="container">
		<div class="matter">
			<h2><?php echo $breadcrum; ?></h2>
			<ul class="list-inline">
				<li>
					<a href="<?php echo PATHBASE; ?>">HOME</a>
				</li>
				<li>
					<a href="login_register.html"><?php echo $breadcrum; ?></a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- bread-crumb end here -->
<?php }else{ ?>
<!-- slider start here -->
<div class="slide"> 
	<div class="slideshow owl-carousel">
		<div class="item">
			<img src="<?php echo FRONT_ASSETS; ?>images/banner.jpg" alt="banner" title="banner" class="img-responsive"/>
		</div>
		<div class="item">
			<img src="<?php echo FRONT_ASSETS; ?>images/banner.jpg" alt="banner" title="banner" class="img-responsive"/>
		</div>
		<div class="item">
			<img src="<?php echo FRONT_ASSETS; ?>images/banner.jpg" alt="banner" title="banner" class="img-responsive"/>
		</div>
	</div>
	<!-- slide-detail start here -->
	<div class="slide-detail">
		<div class="container">
			<div class="matter">
				<p class="text">Get started with online education</p>
				<h4>best online learning system</h4>
				<p class="des">Lorem ipsum dolor sit amet, consectetur adipiscing elit. ut et nulla erat. Nunc lacinia eros neque, eget fringilla dui ullamcorper vitae. vivamus at turpis condimentum.</p>
			</div>
			<div class="matter2">
				<h2>Search</h2>
				<form class="form-horizontal" method="post">
					<div class="form-group">
						<div class="col-sm-10 padd0">
							<div class="col-sm-4">
								<select class="selectpicker form-control" name=	"location">
									<option value="1">Course Categories</option>
									<option value="0">Category 1</option>
									<option value="0">Category 2</option>
									<option value="0">Category 3</option>
								</select>
							</div>
							<div class="col-sm-4">
								<select class="selectpicker form-control" name=	"location">
									<option value="1">Cost Type</option>
									<option value="0">Cost 1</option>
									<option value="0">Cost 2</option>
									<option value="0">Cost 3</option>
								</select>
							</div>
							<div class="col-sm-4">
								<input name="s" class="form-control" value="" placeholder="Search Text" type="text">
							</div>
						</div>
						<div class="col-sm-2">
							<button class="btn-primary" type="button">Search</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>	
	<!-- slide-detail end here -->
</div>
<!-- slider end here -->
<?php } ?>