<?php
	include("server.php");
?>
<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:36:08 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	

    <title>HMS | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	
	<style>
	body
	{	
		position:relative;
		background-image: url(../images/hero.jpg);
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-position:center;
		background-size: cover;
		z-index:1;
	}
	body::before
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

<body class="gray-bg" >

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div class="middle">
            <div>

                <h1 class="logo-name" style="margin-left:0%;">HMS<span style="color:red">+</span></h1>

            </div>
            <h3 style="color:white;">Hospital Management System</h3>
            <p style="color:white;">Login as Administrator</p>
            <form class="m-t" role="form" action="" method="post">
                <div class="form-group">
					<input type="hidden" name="id">
                    <input type="text" name="email" class="form-control" placeholder="Username" require="" class="border">
                </div>
				<span style="color:red;" ><?php if(!empty($l_error[0])){echo $l_error[0]."<br><br>";}?></span>
				
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" require="" class="border">
                </div>
				<span style="color:red;" ><?php if(!empty($l_error[1])){echo $l_error[1]."<br><br>";}?></span>
				<span style="color:red;" ><?php if(!empty($l_error[3])){echo $l_error[3]."<br><br>";}?></span>
				

				 <div class="form-group">
                    <input type="text" name="captcha" class="form-control" placeholder="Enter Captcha Code" require="" class="border">
                </div>
				<img src="captcha.php"><br><br>
				
				
				<span style="color:red;" ><?php if(!empty($l_error[2])){echo $l_error[2]."<br><br>";}?></span>
                <button type="submit" name="login_admin" class="btn btn-primary block full-width m-b" style="background-color:rgb(51,197,249);">Login</button>

				<p style="color:white;">or</p>
				<a class="btn btn-sm btn-white btn-block" href="../index.php"><b>Back To Home</b></a>
              <!--  <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>-->
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:36:08 GMT -->
</html>
