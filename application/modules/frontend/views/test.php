<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Form Data</title> 

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>
<body>
        <div class="container">

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="profilephoto">Profile Pic</label>
  <div class="col-md-4">
    <input id="profilephoto" name="profilephoto" class="input-file" type="file">
  </div>
</div>

<!-- Select Multiple -->
<div class="form-group">
  <label class="col-md-4 control-label" for="language">Language</label>
  <div class="col-md-4">
    <select id="language" name="language" class="form-control" multiple="multiple">
      <option value="1">Hindi</option>
      <option value="2">English</option>
      <option value="3">Bengali</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="country">Country</label>
  <div class="col-md-4">
    <select id="country" name="country" class="form-control">
      <option value="1">India</option>
      <option value="2">Pakistan</option>
      <option value="3">China</option>
    </select>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="gender">Gender</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="gender-0">
      <input type="radio" name="gender" id="gender-0" value="1" checked="checked">
      Male
    </label>
	</div>
  <div class="radio">
    <label for="gender-1">
      <input type="radio" name="gender" id="gender-1" value="2">
      Female
    </label>
	</div>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="skills">Skills</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="skills-0">
      <input type="checkbox" name="skills" id="skills-0" value="1">
      PHP
    </label>
	</div>
  <div class="checkbox">
    <label for="skills-1">
      <input type="checkbox" name="skills" id="skills-1" value="2">
      Mysql
    </label>
	</div>
  <div class="checkbox">
    <label for="skills-2">
      <input type="checkbox" name="skills" id="skills-2" value="3">
      JS
    </label>
	</div>
  <div class="checkbox">
    <label for="skills-3">
      <input type="checkbox" name="skills" id="skills-3" value="4">
      Jquery
    </label>
	</div>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Address</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="address" name="address">Type your address</textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mobile">Mobile</label>  
  <div class="col-md-4">
  <input id="mobile" name="mobile" type="text" placeholder="Enter Mobile" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="Enter Password" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="Enter Email" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-4">
  <input id="name" name="name" type="text" placeholder="Enter Name" class="form-control input-md" required="">
    
  </div>
</div>

</fieldset>
</form>

</div>
</body>
</html>