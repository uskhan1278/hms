<div id="wrapper">
       <?php include("sidebar-nav.php")?>
        <div id="page-wrapper" class="gray-bg dashbard-1">
      <?php include("header.php"); ?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Patient Profile</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        
                        <li class="active">
                            <strong>Profile</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">

 <div class="row m-b-lg m-t-lg">
                <div class="col-md-10">

                    <div class="profile-image">
                        <img src="img/a4.jpg" class="img-circle circle-border m-b-md" alt="profile">
                    </div>
                    <div class="profile-info">
                        <div class="">
                            <div>
                                <h2 class="no-margins">
                                    <strong> <?php echo $_SESSION['rslt_name'];?></strong>
                                </h2>
                                <h4>Patient</h4>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <table class="table small m-b-xs">
                        <tbody>
                        <tr>
                            <td>
                                <strong>Name</strong>
                            </td>
                            <td>
                                <strong></strong>usman
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <strong>Email</strong>
                            </td>
                            <td>
                                <strong></strong>uskhan1278@gmail.com
                            </td>
                        </tr>
						<tr>
                            <td>
                                <strong>Mobile</strong>
                            </td>
                            <td>
                                <strong></strong>8954601348
                            </td>
                        </tr>
							<td>
                                <strong>Address</strong>
                            </td>
                            <td>
                                <strong></strong>Gangoh,Saharanpur.
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                


            </div>
			</div>
			<?php include("footer.php");?>
		</div>
		
	</div>	
	