<?php 
	session_start();
	$conn=mysqli_connect('localhost','root','','hms');
	//doctor insert query
	if(isset($_POST['book_appointment']))
	{
		
		$speciality=$_POST['speciality'];
		@$Doctor_Name=$_POST['doc_name'];
		$Appointent_Date=$_POST['date_time'];
		$Patient_Name=$_POST['name'];
		$Patient_Email=$_POST['email'];
		$Patient_Mobile=$_POST['number'];
		$Patient_Age=$_POST['age'];
		$Patient_Address=$_POST['address'];
		$error=array();
		$profile_email=$_SESSION['email'];
		
		
		//speciality validation
		if(empty($speciality))
		{
			$error[0]="Please select any speciality";
		}
		
		//Doctor_Name validation
		if(empty($Doctor_Name))
		{
			$error[1]="Please select any doctor";
		}
		
		
		//Appointent_Date validation
		if(empty($Appointent_Date))
		{
			$error[2]="Date and Time is required";
		}
		
		//Patient_Name validation
		if(empty($Patient_Name))
		{
			$error[3]="Patient Name is required";
		}
		else
		{
			if(!preg_match("/^[A-Za-z ]*$/",$Patient_Name))
			{
				$error[3]="Name contains only characters";
			}
		}
		
		
		
		//Patient_Email validation
		if(empty($Patient_Email))
		{
			$error[4]="Email is required";
		}
		elseif(!filter_var($Patient_Email, FILTER_VALIDATE_EMAIL)) 
		{
			$error[4]="Email is not valid";
		}
		
		
		
		//Patient_Mobile validation
		if(empty($Patient_Mobile))
		{
			$error[5]="Number is required";
		}
		elseif(strlen($Patient_Mobile)<10)
		{
			$error[5]="Length of the number should be 10";
		}
		
		
		//Patient_Age validation
		if(empty($Patient_Age))
		{
			$error[6]="Patient Age is required";
		}
		
		//Patient_Address validation
		if(empty($Patient_Address))
		{
			$error[7]="Patient Address is required";
		}
		
		
		//insert data
		if(empty($error))
		{
			$ins=mysqli_query($conn,"insert into book_appointment (unique_id,profile_email,datetime,patient_name,patient_email,patient_number,patient_age,patient_address) values ('$Doctor_Name','$profile_email','$Appointent_Date','$Patient_Name','$Patient_Email','$Patient_Mobile','$Patient_Age','$Patient_Address')");

			$r=mt_rand(1,100);
			echo "<script>alert('Appointment Booked number=$r')</script>";
		}
	}

?>
    <div id="wrapper">
<?php include'sidebar-nav.php';?>

       <div id="page-wrapper" class="gray-bg">
	   <div class="row border-bottom">
			<?php include'header.php';?>
		 </div>
		 <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Book Appointent</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
                            <strong>Book Appointent</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
			<div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-content">
                                <form id="form" method="post" action="" enctype="multipart/form-data">
										<center><h1>BOOK APPOINTMENT</h1></center>
									<div class="form-group">
										<label>Select Specility</label>
										<div><select class="form-control m-b" name="speciality" id="speciality_list" onchange="getdoc(this.value)">
											<option value="">Select Speciality</option>
											<?php
												$sql = mysqli_query($conn,"SELECT * FROM add_doc_speciality");
												while($spe=mysqli_fetch_array($sql))
												{
												echo '<option value="'.$spe['speciality_id'].'">'.$spe['add_doc_speciality'].'</option>';
												} ?>
										</select>
										<span style="color:red;" ><?php if(!empty($error[0])){echo $error[0]."<br><br>";}?></span>
										</div>
									</div>
									<div class="form-group">
										<label>DOC Name</label>
										<div><select class="form-control m-b" name="doc_name" id="doc_list" onchange="getfee(this.value)">
											<option value="">Select Doctors</option>
										</select>
										<span style="color:red;" ><?php if(!empty($error[1])){echo $error[1]."<br><br>";}?></span>
										</div>
									</div>
									<div class="form-group"><label>Doc Consultency Fee</label> <input type="text" placeholder="Doc Consultency Fee" id="fee_list" class="form-control" name="consultency_fee" readonly>
									</div>
									
                                    <div class="form-group"><label>Appointent Date</label> <input type="date" class="form-control" name="date_time" required>
									<span style="color:red;" ><?php if(!empty($error[2])){echo $error[2]."<br><br>";}?></span>
									</div>
									
                                    <div class="form-group"><label>Patient Name</label> <input type="text" placeholder="patient Name" class="form-control" name="name">
									<span style="color:red;" ><?php if(!empty($error[3])){echo $error[3]."<br><br>";}?></span>
									</div>
									
									<div class="form-group"><label>Patient Email</label> <input type="email" placeholder="Patient Email" class="form-control" name="email">
									<span style="color:red;" ><?php if(!empty($error[4])){echo $error[4]."<br><br>";}?></span>
									</div>
									
									<div class="form-group"><label>Patient Mobile</label> <input type="text" placeholder="Patient Mobile" class="form-control" name="number">
									<span style="color:red;" ><?php if(!empty($error[5])){echo $error[5]."<br><br>";}?></span>
									</div>
									
									<div class="form-group"><label>Patient Age</label> <input type="text" placeholder="Patient Age" class="form-control" name="age">
									<span style="color:red;" ><?php if(!empty($error[6])){echo $error[6]."<br><br>";}?></span>
									</div>
									
									<div class="form-group"><label>Patient Address</label> <input type="text" placeholder="Patient Address" class="form-control" name="address">
									<span style="color:red;" ><?php if(!empty($error[7])){echo $error[7]."<br><br>";}?></span>
									</div>
			
                                    <div>
                                        <button class="btn btn-sm btn-primary m-t-n-xs" type="submit" name="book_appointment"><strong>Submit</strong></button>
                                    </div>
                                </form>
                        </div>
                    </div>


                </div>
               
            </div>

        </div>

<script type="text/javascript" src="../js/jquery.js"></script>
											<script type="text/javascript">
												function getdoc(val)
												{
													 //alert('hello');
													$.ajax({
														type:'POST',
														url:'fetch_data.php',
														data:'spe_id='+val,
														success:function(data){
															$("#doc_list").html(data);
														}
														
													});
												}
												
												function getfee(val)
												{
													 // alert(val);
													$.ajax({
														type:'POST',
														url:'fetch_data.php',
														data:'fee_id='+val,
														success:function(data){
															$("#fee_list").val(data);
														}
														
													});
												}
											</script>
<?php include'footer.php';?>