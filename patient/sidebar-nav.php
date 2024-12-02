<?php include 'server.php';?>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HMS | Patient Pannel</title>

    <link href="../admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="../admin/css/animate.css" rel="stylesheet">
    <link href="../admin/css/style.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" src="../images/logo.png" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php if(isset($_SESSION['email'])){
					$session_email=$_SESSION['email'];
					$slct=mysqli_query($conn,"select * from patient_login where email='$session_email'");
					$rslt=mysqli_fetch_array($slct);
					$_SESSION['rslt_name']=$rslt['name'];
					echo $rslt['name'];
				}?></strong>
                             </span> <span class="text-muted text-xs block">Patient</span></a>
                           
                        </div>
                        <div class="logo-element">
                            HMS+
                        </div>
                    </li>
                    <li class="active">
                        <a href="index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
                    </li>
					<li class="active">
                        <a href="book_appointment.php"><i class="fa fa-calendar"></i> <span class="nav-label">Book Appointment</span></a>
                    </li>
					<li class="active">
                        <a href="patient_profile.php"><i class="fa fa-users"></i> <span class="nav-label">Patient Profile</span></a>
                    </li>
					
					<li class="active">
                        <a href="appointment_history.php"><i class="fa fa-users"></i><span class="nav-label">Appointment History</span></a>
                    </li>

            </div>
        </nav>
