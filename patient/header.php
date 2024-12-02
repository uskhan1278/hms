<?php 
	include('server.php');
	if(empty($_SESSION['email'])){
		header('location:login.php');
	}
?> 

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
				<?php if(isset($_SESSION['email'])){
					$session_email=$_SESSION['email'];
					$slct=mysqli_query($conn,"select * from patient_login where email='$session_email'");
					$rslt=mysqli_fetch_array($slct);
				}?>
                    <a href="index.php?logout=1"> Welcome :- <?= $rslt['name'];?> 
                       <span style="color:red;"> <i class="fa fa-sign-out"></i> Logout</span>
                    </a>
                </li>
            </ul>

        </nav>
        </div>