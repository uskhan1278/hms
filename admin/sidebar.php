<?php
	include('server.php');
	if(isset($_SESSION['user']))
	{
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>HMS | Admin</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

	<link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
	
    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Admin</strong></a>
                          <!--    </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                           <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html">Logout</a></li>
                            </ul>-->
                        </div>
                        <div class="logo-element">
                           HMS
                        </div>
                    </li>
                    <li class="active">
                        <a href="index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <!--<span class="fa arrow"></span>--></a>
                        <!--<ul class="nav nav-second-level">
                            <li class="active"><a href="index-2.html">Manage Doc</a></li>
                            <li><a href="dashboard_2.html">Manage Patient</a></li>
                        </ul>-->
                    </li>
					<li class="active">
                        <a href="index-2.html"><i class="fa fa-th-large"></i> <span class="nav-label">Manage Doctors</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
							<li><a href="add_speciality.php">Add Speciality</a></li>
                            <li><a href="add_doc.php">Add Doctor</a></li>
                            <li><a href="list_doc.php">List of Doctors</a></li>
                            
                        </ul>
                    </li>
					<li class="active">
                        <a href="index-2.html"><i class="fa fa-th-large"></i> <span class="nav-label">Manage Patient</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="list_patient.php">List of Patients</a></li>
                            <li><a href="app_history.php">Appointment history</a></li>
                        </ul>
                    </li>
        </nav>
<?php
	}
	else
	{
		header('location:login.php');
	}
?>