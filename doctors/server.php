<?php
	@session_start();
	$con=mysqli_connect('localhost','root','','hms');

	$name_error=$id_error="";
	if(isset($_POST['doc_login'])){
		$name=$_POST['name'];
		$cap3=$_POST["captcha"];
		$captcha3=$_SESSION["captcha_code3"];
		$user_id=$_POST['user_id'];
		$doc_err=array();
		
		// Login Validation
		if(empty($name)){
			$doc_err[0]="Field is Required";
		}
		if(empty($user_id)){
			$doc_err[1]="Field is Required";
		}
		if(empty($cap3))
		{
			$doc_err[2]="Enter Captcha code";
		}
		if($cap3!=$captcha3)
		{
			$doc_err[2]="Enter Correct Captcha Code";
		}
		if(empty($doc_err))
		{
			$query=mysqli_query($con,"SELECT * FROM add_doctors WHERE unique_id='$user_id'");
			$fetch=mysqli_fetch_array($query);
			if(($name==$fetch['name'])&&($user_id==$fetch['unique_id']))
			{
				$_SESSION['username']=$name;
				$_SESSION['unique_id']=$user_id;
				header("location:index.php");
			}
			else{
				echo "<script>alert('Wrong Name or ID')</script>";
			}
		}
	}
	
	//Logout..
	if(isset($_GET['logout'])){
		session_unset();
		session_destroy();
		header("location:login.php");
	}

?>