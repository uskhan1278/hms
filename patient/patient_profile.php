<?php include'server.php';?>
<div id="wrapper">
       <?php include("sidebar-nav.php")?>
        <div id="page-wrapper" class="gray-bg dashbard-1">
      <?php include("header.php"); ?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Patient Profile</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="profile.php">Home</a>
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
                        <img src="../images/user-shape.png" class="img-circle circle-border m-b-md" alt="profile">
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
				<?php if(isset($_SESSION['email'])){
					$email=$_SESSION['email'];
				$query=mysqli_query($conn,"SELECT * FROM patient_login WHERE email='$email'");?>
                    <table class="table small m-b-xs">
                        <tbody>
						<?php while($fetch=mysqli_fetch_array($query)){?>
							<td>
                                <strong>Name</strong>
                            </td>
                            <td>
                                <?= $fetch['name'];?>
                            </td>
						<tr>
                            <td>
                                <strong>Email</strong>
                            </td>
                            <td>
                                <?php echo $_SESSION['email'];?>
                            </td>
                        </tr>                 
						<tr>
                            <td>
                                <strong>Mobile</strong>
                            </td>
                            <td>
                               <?= $fetch['mobile'];?>
							</td>
                        </tr>
							<td>
                                <strong>Address</strong>
                            </td>
                            <td>
                                <?= $fetch['address'];?>
                            </td>
                        </tr>
						<?php } ?>
                        </tbody>
                    </table>
					<?php } ?>
                </div>
                


            </div>
			</div>
				
			<?php include("footer.php");?>
		</div>
		
	</div>	
	