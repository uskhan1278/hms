<?php
	session_start();
	
	//create connection
	$conn=mysqli_connect("localhost","root","","hms") or die('not connected');
	
	//select Data
	// $select=mysqli_query($conn,"select * from add_doctors");
	
	//Admin Login
	if(isset($_GET['logout']))
	{
		session_unset();
		session_destroy();
		header("location:login.php");
	}
	
	if(isset($_POST['login_admin']))
	{
		$email=$_POST['email'];
		$password=$_POST['password'];
		$cap=$_POST["captcha"];
		$captcha=$_SESSION["captcha_code"];
		$l_error=array();
		if(empty($email))
		{
			$l_error[0]="Field is required";
		}
		if(empty($password))
		{
			$l_error[1]="Field is required";
		}
		if(empty($cap))
		{
			$l_error[2]="Enter Captcha code";
		}
		elseif($cap!=$captcha)
		{
			$l_error[2]="Enter Correct Captcha Code";
		}
		
		$em=mysqli_query($conn,"select * from admin where name='$email' and password = '$password'")or die();
		$data=mysqli_fetch_array($em);
		if(($email!=$data['name']) or ($password!=$data['password']))
		{
			$l_error[3]="username or Password is not valid";
		}
			
			if(empty($l_error) && ($email==$data['name']) && ($password==$data['password']))
			{
				$_SESSION['user']=$_POST['email'];
				header("location:index.php");
			}

	}
	
	//Doctor Edit from table
	$eid=$eui=$enum=$eimage="";
	if(isset($_GET['doc_edit']))
	{
		$eid=$_GET['doc_edit'];
		$que=mysqli_query($conn,"select * from add_doctors where id='$eid'");
		$edata=mysqli_fetch_array($que);
		$ename=$edata['name'];
		$enum=$edata['number'];
		$eui=$edata['unique_id'];
		$especiality=$edata['speciality_id'];
		$eage=$edata['age'];
		$equalification=$edata['qualification'];
		$eadd=$edata['address'];
		$eimage=$edata['image'];
		$efee=$edata['consultency_fee'];
	}
	
	//Doctor Delete from Table
	if(isset($_GET['doc_delete']))
	{
		$did=$_GET['doc_delete'];
		$que=mysqli_query($conn,"delete from add_doctors where id='$did'");
		header('location:list_doc.php');
	}
	
	//Add Doctor
	if(isset($_POST['doctor_add']))
	{
		$error=array();
		$name=$_POST['name'];
		$num=$_POST['number'];
		$ui=$_POST['unique_id'];
		$speciality=$_POST['speciality'];
		$age=$_POST['age'];
		$qualification=$_POST['qualification'];
		$add=$_POST['address'];
		$fee=$_POST['fee'];
		
		$sel1=mysqli_query($conn,"select * from add_doctors where number='$num'") or die("select");
		$sel2=mysqli_query($conn,"select * from add_doctors where unique_id='$ui'")or die("sel");
		
		
		//name validate
		if(empty($name))
		{
			$error[0]="Field is required";
		}
		else
		{
			if(!preg_match("/^[A-Za-z. ]*$/",$name))
			{
				$error[0]="Name contains only characters";
			}
		}
		
		//Number validation
		if(empty($num))
		{
			$error[10]="Number is required";
		}
		else
		{
			if(strlen($num)<10)
			{
				$error[1]="Length of the number should be 10";
			}
			else
			{
				while($rows=mysqli_fetch_array($sel1))
				{
					if($num==$rows['number'])
					{
						$error[1]="Number is Already Taken";
					}
				}
			}
		}
		if($enum==$num)
		{
			$error[1]="";
		}
		
		
		//unique_id validation
		
		if(empty($ui))
		{
			$error[11]="Unique_id is required";
		}
		else
		{
			if(strlen($ui)<5)
			{
				$error[2]="Unique id should be of 5 digit";
			}
			else
			{
				while($rowss=mysqli_fetch_array($sel2))
				{
					if($ui==$rowss['unique_id'])
					{
						$error[2]="ID is Already Taken";
					}
				}
			}
		}
		if($eui==$ui)
		{
			$error[2]="";
		}
		
		//Speciality Validation
		
		if($speciality=="Select Speciality")
		{
			$error[3]="Please Select Speciality";
		}
		
		//Age validation
		if(empty($age))
		{
			$error[4]="Age is required";
		}
		
		//qualification validation
		
		if(empty($qualification))
		{
			$error[5]="Age is required";
		}
		
		//Address validation
		if(empty($add))
		{
			$error[6]="Age is required";
		}
		
		//File System validation
		$file_name=$_FILES['image']['name'];
		if(!empty($eimage) && empty($_FILES['image']['name']))
		{
			$file_name=$eimage;
		}
		
		$file_temp=$_FILES['image']['tmp_name'];
		$file_size=$_FILES['image']['size'];
		$b=explode('.',$_FILES['image']['name']);
		$file_ext=strtolower(end($b));
		
		
		if(empty($_FILES['image']['name']) && empty($eimage))
		{
			$error[12]="Please Select an image";
		}
		
		$extentions=array('jpeg','png','jpg');
		if(!empty($_FILES['image']['name']) && in_array($file_ext,$extentions)===false)
		{
			$error[7]="File Extantion is not Valid";
		}
		
		if($file_size>2000000)
		{
			$error[8]="Size is not valid";
		}
		
		//Fee validation
		if(empty($fee))
		{
			$error[9]="Cunsultency Fee is required";
		}
		
		if(empty($errors) && !empty($eid))
		{
			// update query
			$que=mysqli_query($conn,"update add_doctors set name='$name',number='$num',unique_id='$ui',speciality_id='$speciality',age='$age',qualification='$qualification',address='$add',image='$file_name',consultency_fee='$fee' where id='$eid'") or die("empty");
			
			$a= move_uploaded_file($file_temp,"D:/xampp/htdocs/hms/doctors/images/".$file_name);
			
			header('location:list_doc.php');
		}
		
		if(empty($error) && empty($eid))
		{
			//insert query
			$que=mysqli_query($conn,"insert into add_doctors (name,number,unique_id,speciality_id,age,qualification,address,image,consultency_fee) VALUES ('$name','$num','$ui','$speciality','$age','$qualification','$add','$file_name','$fee')")or die('not');
			
			$a= move_uploaded_file($file_temp,"D:/xampp/htdocs/hms/doctors/images/".$file_name);
			header('location:list_doc.php');
		}
	}
	
	//add doc speciality
	if(isset($_POST['submit_speciality']))
	{
		$special=$_POST['add_speciality'];
		$spe=mysqli_query($conn,"insert into add_doc_speciality (add_doc_speciality) VALUES ('$special')")or die('not');
		echo "<script>alert('speciality Succussfully added')</script>";
	}
	
	//confirm
	if(isset($_GET['confirm']))
	{
		$confirm_id=$_GET['confirm'];
		mysqli_query($conn,"update book_appointment set status=1 where id='$confirm_id'");
	}
	
	//deny
	if(isset($_GET['deny']))
	{
		$confirm_id=$_GET['deny'];
		mysqli_query($conn,"update book_appointment set status=0 where id='$confirm_id'");
	}
?>