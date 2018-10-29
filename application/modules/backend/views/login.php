
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Karmanta - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Karmanta, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php echo ADMIN_ASSETS; ?>img/favicon.png">

    <title>Admin Login</title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo ADMIN_ASSETS; ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo ADMIN_ASSETS; ?>css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo ADMIN_ASSETS; ?>css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo ADMIN_ASSETS; ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo ADMIN_ASSETS; ?>css/style.css" rel="stylesheet">
    <link href="<?php echo ADMIN_ASSETS; ?>css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">

    <div class="container">

      
      <?php echo form_open('ecadmin/loginsuccess',["class"=>"login-form","method"=>"post","id"=>"signinfrm","name"=>"signinfrm"]);  ?>        
        <div class="login-wrap">
            <span><?php if(!empty($this->session->flashdata('errMsg'))){ echo $this->session->flashdata('errMsg'); }?></span>
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" placeholder="Email/Mobile" name="username" id="username" autofocus required="required" value="<?php echo set_value("username"); ?>">
            </div>
            <p id="errorUserName" style="color:red;"></p>
            <?php echo form_error('username', '<div class="error">', '</div>'); ?>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
            </div>
             <p id="errorPassword" style="color:red;"></p>
             <?php echo form_error('password', '<div class="error">', '</div>'); ?>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnSubmit" id="btnSubmit">Login</button>
            <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>
        </div>
      <?php echo form_close(); ?>

    </div>


  </body>
</html>
