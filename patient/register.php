<?php
	include('server.php');
	
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HMS | Register</title>

    <link href="../admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../admin/css/plugins/iCheck/custom.css" rel="stylesheet">
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
            <h3 style="color:white;">Register to Hospital Management System</h3>
            <p style="color:white;">Patient Registration</p>
            <form class="m-t" method="post" role="form" action="">
                <div class="form-group">
                    <input type="text"  name="name" class="form-control" placeholder="Name">
					<span style="color:red"><?php if(!empty($rerr[0]))echo $rerr[0]."<br><br>";?></span>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email">
					<span style="color:red"><?php if(!empty($rerr[1]))echo $rerr[1]."<br><br>";?></span>
                </div>
                <div class="form-group">
                    <input type="password" name="pass" class="form-control" placeholder="Password">
					<span style="color:red"><?php if(!empty($rerr[2]))echo $rerr[2]."<br><br>";?></span>
                </div>
				<div class="form-group">
                    <input type="text" name="mobile" class="form-control" placeholder="MoblieNum">
					<span style="color:red"><?php if(!empty($rerr[3]))echo $rerr[3]."<br><br>";?></span>
                </div>
				
				<div class="form-group">
                    <input type="text" name="address"class="form-control" placeholder="Address">
					<span style="color:red"><?php if(!empty($rerr[4]))echo $rerr[4]."<br><br>";?></span>
                </div>
				
				
				 <div class="form-group">
                    <input type="text" name="captcha" class="form-control" placeholder="Enter Captcha Code" require="" class="border">
                </div>
				<img src="captcha.php"><br><br>
				
				<span style="color:red;" ><?php if(!empty($rerr[5])){echo $rerr[5]."<br><br>";}?></span>
                <div class="form-group">
                        <!--<div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy</label></div>
                </div>-->
                <button type="submit" name="register" class="btn btn-primary block full-width m-b" style="background-color:rgb(51,197,249);">Register</button>

                <p class="text-muted text-center" style="color:white;"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="login.php">Login</a>
				</form>
				</div>
			</div>
    </div>
</div>
    <!-- Mainly scripts -->
    <script src="../admin/js/jquery-3.1.1.min.js"></script>
    <script src="../admin/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../admin/js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:26:54 GMT -->
</html>
