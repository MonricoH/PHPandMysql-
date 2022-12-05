<?php

if (isset($_POST['btncreate'])) {
	$fullname = htmlspecialchars(stripslashes(trim($_POST['txtfullname'])));
	$sex = $_POST['radsex'];
	$emailadress = htmlspecialchars(stripslashes(trim($_POST['txtemail'])));
	$jobtype = $_POST['drpjobtype'];

	//test the following fields are empty

	if(empty($fullname))
		$arrerror['fullname'] = 'full name is req';

	if(empty($sex))
		$arrerror['sex'] = 'sex is req';

	if(empty($emailadress))
		$arrerror['emailadress'] = 'email address is req';
	else{
		if(!filter_var($emailadress, FILTER_VALIDATE_EMAIL)) {
			$arrerror['emailadress'] = 'email is invalid';
		}
		if (empty($jobtype)) 
			$arrerror['jobtype'] = 'job type is req';
		
	}
	if (isset($arrerror)) 
		echo "may error";
	else
		echo "walang error";

}



?> 


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	<link rel="stylesheet" type="text/css" href="serversidevalidation.css">
	<title></title>
</head>
<body>



<div class="container mt-5">
<div class="card bg-light">
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
	  	<strong>Holy guacamole!</strong> You should check in on some of those fields below.
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
<article class="card-body mx-auto" style="max-width: 400px;">
	
	<form method="post">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="txtfullname" class="form-control" placeholder="Full name" type="text">
    </div>
    <div class="form-check form-check-inline">
        <input type="radio" name="radsex" id="radmale" value="male" checked="">
        <label for="radmale"> Male</label>
    </div> 
    <div class="form-check form-check-inline">
        <input type="radio" name="radsex" id="radfemale" value="female">
        <label for="radfemale"> Female</label>
    </div> 
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="txtemail" class="form-control" placeholder="Email address" type="text">
    </div> 
    
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		<select name="drpjobtype" class="form-control">
			<option selected> Select job type</option>
			<option value="developer">Developer</option>
			<option value="designer">Designer</option>
			<option value="quality assurance">Quality Assurance</option>
		</select>
	</div>
                                     
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" name="btncreate"> Create Account  </button>
    </div> <!-- form-group// -->      
                                                                     
</form>
</article>
</div> 

</div> 








<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>