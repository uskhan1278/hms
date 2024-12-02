<?php include("server.php");
	if(empty($_SESSION['username'])){
		header('location:login.php');
	}
?>

<!--
*
*  INSPINIA - Responsive Admin Theme
*  version 2.7.1
*
-->

<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:20:52 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>HMS | Web Application</title>

    <link href="../admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="../admin/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="../admin/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="../admin/css/animate.css" rel="stylesheet">
    <link href="../admin/css/style.css" rel="stylesheet">

</head>
 <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="http://webapplayers.com/inspinia_admin-v2.7.1/search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome to <b>Hospital Management System</b></span>
                </li>   


                <li class="dropdown">
						<a href="index.php?logout=1">
                        <b>Welcome:</b> <?php echo $_SESSION['username'];?> <span style="color:red;"><i class='fa fa-sign-out'></i>Logout</span>
                    </a>
				</li>
            </ul>

        </nav>
        </div>