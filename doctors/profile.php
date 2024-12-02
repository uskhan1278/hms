<?php 
	include 'server.php';
	//$doc_name='';
?>
<?php if(isset($_SESSION['unique_id'])){
					$unique_id=$_SESSION['unique_id'];
				$query=mysqli_query($con,"SELECT * FROM add_doctors WHERE unique_id='$unique_id'");?>
<div id="wrapper">
       <?php include("sidebar.php")?>
        <div id="page-wrapper" class="gray-bg dashbard-1">
      <?php include("header.php"); ?>
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Doctor Profile</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        
                        <li class="active">
                           <a href="profile.php"><strong>Profile</strong></a>
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
					<?php while($fetch=mysqli_fetch_array($query)){?>
                        <img src="images/<?= $fetch['image'];?>"height="100px" width="100px" class="img-circle circle-border m-b-md" alt="profile">
                    </div>
                    <div class="profile-info">
                        <div class="">
                            <div>
                                <h2 class="no-margins">
                                    <strong> <?= $_SESSION['username']; ?></strong>
                                </h2>
                                <h4>Doctor</h4>
                                <small>
                                   Your profile and it is detail add by admin.
                                </small>
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
								<?php echo $_SESSION['username'];?>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <strong>Phone Number</strong>
                            </td>
                            <td>
                                <?= $fetch['number'];?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Speciality</strong>
                            </td>
                            <td>
                                <?php 
								$si=$fetch['speciality_id'];
								$doc_sp=mysqli_query($con,"select * from add_doc_speciality where speciality_id='$si'");
								$d=(mysqli_fetch_array($doc_sp));
								echo $d['add_doc_speciality'];
								?>
                            </td>
                        </tr>
						<tr>
                            <td>
                                <strong>Age</strong>
                            </td>
                            <td>
                               <?= $fetch['age'];?>
                            </td>
                        </tr>
						<tr>
                            <td>
                                <strong>Qualification</strong>
                            </td>
                            <td>
                               <?= $fetch['qualification'];?>
                            </td>
                        </tr>
						<tr>
                            <td>
                                <strong>Consultency Fee</strong>
                            </td>
                            <td>
                              <?= $fetch['consultency_fee'];?>
                            </td>
                        </tr>
						<tr>
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
				<?php }?>
                </div>
                


            </div>
			</div>
			<?php include("footer.php");?>
		</div>
		
	</div>	
	