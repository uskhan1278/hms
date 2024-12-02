<?php
	@session_start();
	$conn=mysqli_connect('localhost','root','','hms');
	$errorEmail = $errorPassword = $errorName = $errorAddress =$errorMobile = '';
	
	
	//patient registration
	if(isset($_POST['register']))
	{        
			$name=$_POST['name'];
			$email=$_POST['email'];
			$pass=$_POST['pass'];
			$mobile=$_POST['mobile'];
			$address=$_POST['address'];
			if(!empty($name && $email && $pass && $mobile && $address)){
				$sql="INSERT INTO patient_login(name,email,pass,mobile,address)VALUES('$name','$email','$pass','$mobile','$address')";
				$res=mysqli_query($conn,$sql);
		if($res){
			echo "<script>alert('data submitted is susseccful')</script>";
		}else{
			echo "<script>alert('data  not submitted is susseccful')</script>";
		}
			header('location:login.php');
	   }
			
	}
	
	// Patient Login
	$errEmail=$errPassword="";
	if(isset($_POST['login']))
	{
		$email=$_POST['email'];
		$password=$_POST['pass'];
		if(empty($email)){
			$errEmail="Email is requried";
		}
		if(empty($password)){
			$errPassword="password is requried";
		}
		if(empty($errorEmail) && empty($errorPass))
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
	if(isset($_GET['logout'])){
		session_destroy();
		session_unset();
		header('location:login.php');
	}
	///patient profile
	if(isset($_GET['profile'])){
		
	}
		///doctor insert query
		if(isset($_POST['ADD'])){
			echo $Specility=$_POST['Specility'];
			echo $Doctor_Name=$_POST['Doctor_Name'];
			echo $Consultency_Fee=$_POST['Consultency_Fee'];
			echo $Appointent_Date=$_POST['Appointent_Date'];
			echo $Patient_Name=$_POST['Patient_Name'];
			echo $Patient_Mobile=$_POST['Patient_Mobile'];
			echo $Patient_Age=$_POST['Patient_Age'];
			echo $Patient_Address=$_POST['Patient_Address'];
			
		}
?>