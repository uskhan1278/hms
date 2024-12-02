<?php
	@session_start();
	$conn=mysqli_connect('localhost','root','','hms');
	$errorEmail = $errorPassword = $errorName = $errorAddress =$errorMobile = '';
	
	if(isset($_GET['success']))
	{
		$r=mt_rand(1,100);
		echo "<script>alert('Appointment Booked number=$r')</script>";
	}
	
	//patient registration
	if(isset($_POST['register']))
	{        
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$mobile=$_POST['mobile'];
		$address=$_POST['address'];
		$cap2=$_POST["captcha"];
		$captcha2=$_SESSION["captcha_code2"];
		$rerr=array();
		
		
		//select query
		$select1=mysqli_query($conn,"select * from patient_login where email='$email'");
		$data1=mysqli_fetch_array($select1);
		
		$select2=mysqli_query($conn,"select * from patient_login where mobile='$mobile'");
		$data2=mysqli_fetch_array($select2);
		
		//Name validation
		if(empty($name))
		{
			$rerr[0]="Name is required";
		}
		else
		{
			if(!preg_match("/^[A-Za-z ]*$/",$name))
			{
				$rerr[0]="Name contains only characters";
			}
		}
		
		//email validation
		if(empty($email))
		{
			$rerr[1]="Email is required";
		}
		elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
			$rerr[1]="Email is not valid";
		}
		elseif(mysqli_num_rows($select1)>0)
		{
			$rerr[1]="Email is already taken";
		}
		
		
		//password validation
		if(empty($pass))
		{
			$rerr[2]="Password is required";
		}
		if(!empty($pass) && strlen($pass)<8)
		{
			$rerr[2]="Password should be equal or greater than 8 digit";
		}
		
		
		//mobile number
		if(empty($mobile))
		{
			$rerr[3]="Mobile number is required";
		}
		elseif(!empty($mobile) && strlen($mobile)<10) 
		{
			$rerr[3]="Mobile number should be of 10 digit";
		}
		elseif(mysqli_num_rows($select2)>0)
		{
			$rerr[3]="Mobile number is already taken";
		}
		
		
		//address validation
		if(empty($address))
		{
			$rerr[4]="Address is required";
		}
		
		//captcha validation
		if(empty($cap2))
		{
			$rerr[5]="Enter Captcha code";
		}
		elseif($cap2!=$captcha2)
		{
			$rerr[5]="Enter Correct Captcha Code";
		}
		
		
		if(empty($rerr))
		{
			$res=mysqli_query($conn,"INSERT INTO patient_login(name,email,pass,mobile,address)VALUES('$name','$email','$pass','$mobile','$address')");
			echo ("<script type='text/javascript'>
					alert('Registration Successful');
					window.location.replace('login.php');
					</script>");
		}
	}
	
	// Patient Login
	$errEmail=$errPassword="";
	if(isset($_POST['login']))
	{
		$email=$_POST['email'];
		$password=$_POST['pass'];
		$cap1=$_POST["captcha"];
		$captcha1=$_SESSION["captcha_code1"];
		$err=array();
		if(empty($email))
		{
			$err[0]="Email is requried";
		}
		if(empty($password))
		{
			$err[1]="password is requried";
		}
		if(empty($cap1))
		{
			$err[2]="Enter Captcha code";
		}
		elseif($cap1!=$captcha1)
		{
			$err[2]="Enter Correct Captcha Code";
		}
		
		if(empty($err))
		{
		$a=mysqli_query($conn,'SELECT * FROM patient_login WHERE email="'.$email.'" and pass="'.$password.'"');
			if(mysqli_num_rows($a)==1)
			{
				$_SESSION['email'] = $email;
				header('location:index.php');
			}
			else
			{
				echo "<script>alert('account invalid')</script>";
			}
		}
	}

	// Logout Patient
	if(isset($_GET['logout']))
	{
		session_destroy();
		session_unset();
		header('location:login.php');
	}
?>