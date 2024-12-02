<?php
	include('server.php');
?>
<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:36:08 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HMS | Login</title>

    <link href="../admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="../admin/css/animate.css" rel="stylesheet">
    <link href="../admin/css/style.css" rel="stylesheet">
	
	<style>
	.body
	{	
		position:relative;
		background-image: url(../images/hero.jpg);
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-position:center;
		background-size: cover;
		z-index:1;
	}
	.body::before
	{
	  content: "";
	  display: block;
	  position: absolute;
	  z-index: -1;
	  width: 100%;
	  height: 105%;
	  top: 0;
	  left: 0;
	  background-color: rgba(255,255,255,0.7);
	}
	.middle
	{
		background-color: rgb(87,126,228);
		margin-left: -35%;
		width: 170%;
		padding: 50px 60px 100px 60px;
		border-radius: 20px;
	}
	
	.border{
		border-bottom:2px solid red;
	}
	</style>
</head>

<body class="gray-bg">
<div class="body">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div class="middle">
            <div>
                <h1 class="logo-name" style="margin-left:0%;">HMS<span style="color:red">+</span></h1>
            </div>
            <h3 style="color:white;">Hospital Management System</h3>
            <p style="color:white;">Login as Doctor</p>
            <form action="" method="post" class="m-t" role="form">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name"><span style="color:red"><?php if(!empty($doc_err[0])){echo $doc_err[0];}?></span>
                </div>
                <div class="form-group">
                    <input type="password" name="user_id" class="form-control" placeholder="ID"><span style="color:red"><?php if(!empty($doc_err[1])){echo $doc_err[1];}?></span>
                </div>
				
				
				 <div class="form-group">
                    <input type="text" name="captcha" class="form-control" placeholder="Enter Captcha Code" require="" class="border">
                </div>
				<img src="captcha.php"><br><br>
				
				<span style="color:red"><?php if(!empty($doc_err[2])){echo $doc_err[2];}?></span>
                <button type="submit" name="doc_login" class="btn btn-primary block full-width m-b" style="background-color:rgb(51,197,249);">Login</button>
				
				<p style="color:white;">or</p>
				<a class="btn btn-sm btn-white btn-block" href="../index.php"><b>Back To Home</b></a>
            </form>
        </div>
    </div>
</div>
    <!-- Mainly scripts -->
    <script src="../admin/js/jquery-3.1.1.min.js"></script>
    <script src="../admin/js/bootstrap.min.js"></script>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:36:08 GMT -->
</html>
