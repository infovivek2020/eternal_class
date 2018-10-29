<!--Header Part Start-->
<header>
<div class="container-fluid">
 <div class="container font1 hgh-40">
  <div class="row">
    <div class="col-sm-4 d-none d-sm-block">
      <h5 class="m-t-11 font18">+91 9553113456</h5>
      </div>
    <div class="col-sm-8 d-none d-sm-block">
        <div class="float-right header-part">
          <ul>
            <li>info@ksgrandsprojeects.com</li>
            <!--  -->


             <!---->
<li class="dropdown nav-item">
 <?php    if(isset($this->session->userdata['frontlogged_in'])) { ?>
          <a class="dropdown-toggle" data-toggle="dropdown" >Hi <?php $dd = $this->session->userdata['frontlogged_in']; 
         // print_r($this->session->has_userdata('logged_in'));
          //echo logged_in['uname']; ?><?php $explodename = explode(' ',ucwords($dd['funame'])); echo $explodename[0]; ?> </a>
          <?php } else{ ?>
          <a href="<?php echo base_url(); ?>login">Employee Login</a>
          <?php } ?>
          <?php if(isset($this->session->userdata['frontlogged_in'])) { ?>
          <ul class="dropdown-menu" style="display: none;z-index: 9999">
            <li><a href="<?php echo base_url(); ?>logout" >Logout</a></li>
                <?php //print_r($this->session->all_userdata());die; ?>       
          </ul><?php } ?>
        </li>
             <!---->

         </ul>
        </div>
    </div>

      
  </div>
  
 </div>    
</div>
<div class="container-fluid bg-header font1">
<div class="container sticky-top">
           <nav class="navbar navbar-expand-md hgh-55">
        <div class="logo-size">
     <a href="<?php echo base_url(); ?>"><img src="<?php echo FRONT_IMAGES_PATH; ?>kslogo2.png" class="img-fluid">   </a>  </div>
     <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu-collapse">
     <span class="navbar-toggler-icon col-wh"> <i class="fa fa-bars fa-2x" aria-hidden="true"></i></span>    
    </button>
    <div class="collapse navbar-collapse" id="menu-collapse">
     <ul class="navbar-nav ml-auto menu-set">
           <!--  <li class="dropdown nav-item">
          <a href="<?php echo base_url(); ?>" class=" nav-link dropdown-toggle" data-toggle="dropdown">HOME </a>
           <ul class="dropdown-menu">
            <li><a href="index.php" class="dropdown-item" href="#">Index1</a></li>
            <li><a href="index2.php" class="dropdown-item" href="#">Index2</a></li>
           
          </ul> 
        </li>-->
        <?php $activepage = $this->uri->segment('1'); ?>
         <li class="nav-item <?php if($activepage==''){ echo 'active'; } ?>"><a href="<?php echo base_url(); ?>" class="nav-link">HOME</a></li>
         <li class="nav-item <?php if($activepage=='about'){ echo 'active'; } ?>"><a href="<?php echo base_url(); ?>about" class="nav-link">ABOUT US</a></li>
         <li class="nav-item <?php if($activepage=='properties' || $activepage == 'property-details'){ echo 'active'; } ?>"><a href="<?php echo base_url(); ?>properties" class="nav-link">PROPERTIES</a></li>
          <!--  <li class="dropdown nav-item">
          <a href="" class=" nav-link dropdown-toggle" data-toggle="dropdown">PROPERTIES </a>
          <ul class="dropdown-menu">
            <li><a href="property.php" class="dropdown-item" href="#">Property Page</a></li>
            <li><a href="single-property.php" class="dropdown-item" href="#">Single-Property</a></li>
         
          </ul> 
        </li>  -->  
<!--
         <li class="nav-item dropdown"><a href="agent.php" class="nav-link dropdown-toggle"  data-toggle="dropdown">AGENTS</a>
           <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Login</a></li>
    <li><a class="dropdown-item" href="#">Register</a></li>
 
  </ul>
         </li>
-->
<!--         <li class="nav-item"><a href="agent.php" class="nav-link">AGENTS</a></li> -->
         <li class="nav-item <?php if($activepage=='gallery'){ echo 'active'; } ?>"><a href="<?php echo base_url(); ?>gallery" class="nav-link">GALLERY</a></li>
         <li class="nav-item <?php if($activepage=='blog' || $activepage=='blog-details'){ echo 'active'; } ?>"><a href="<?php echo base_url(); ?>blog" class="nav-link">BLOG</a></li>
          <!--<li class="dropdown nav-item">
          <a class=" nav-link dropdown-toggle" href="<?php // echo base_url(); ?>blog" data-toggle="dropdown">BLOG</a>
           <ul class="dropdown-menu">
            <li><a href="blog.php" class="dropdown-item" href="#">Blog Page</a></li> 
              <li><a href="blog-details.php" class="dropdown-item" href="#">Blog-Details</a></li>
           
          </ul>
        </li> -->
         <li class="nav-item <?php if($activepage=='careers'){ echo 'active'; } ?>"><a href="<?php echo base_url(); ?>careers" class="nav-link">CAREERS</a></li>
         <li class="nav-item <?php if($activepage=='contact'){ echo 'active'; } ?>"><a href="<?php echo base_url(); ?>contact" class="nav-link">CONTACT US</a></li>
        </ul>    
    </div>
    </nav>
    </div>
    </div>
</header>
<!--Header Part End-->
