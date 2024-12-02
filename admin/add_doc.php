<?php
	include('sidebar.php');
?>
        <div id="page-wrapper" class="gray-bg">
        <?php include('header.php')?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Doctor Registration</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">
                            <strong>Doctor Registration</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-7" style="width:100%">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <?php if(empty($eid)){echo "<h5>Add Doctor <small>You can add a Doctor</small></h5>";}else {echo "<h5>Update Doctor Info <small>You can update Doctor info</small></h5>";}?>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-6 b-r">
                                <form role="form" action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
										<!-- id -->
										<input type="hidden" name="id">
										
										<!-- Name Field -->
										<label>Name</label>
										<input type="text" name="name" class="form-control" placeholder="Name" require="" value="<?php if(!empty($ename)){echo $ename;}?>"><br>
										<span style="color:red;" ><?php if(!empty($error[0])){echo $error[0]."<br><br>";}?></span>
										
										<!-- Number Field -->
										<label>Mobile Number</label>
										<input type="text" name="number" class="form-control" placeholder="Number" require=""  value="<?php if(!empty($enum)){echo $enum;}?>"><br>
										<span style="color:red;" ><?php if(!empty($error[10])){echo $error[10]."<br><br>";}?></span>
										<span style="color:red;" ><?php if(!empty($error[1])){echo $error[1]."<br><br>";}?></span>
										
										
										<!-- Speciality Field -->
										<label>Speciality</label>
										<select class="form-control" name="speciality">
											<option>Select Speciality</option>
											
											<?php
												echo $sqli=mysqli_query($conn,"select * from add_doc_speciality")or die();
												while($sp=mysqli_fetch_array($sqli))
												{
											?>
													<option value="<?=$sp['speciality_id']?>" <?php if(!empty($especiality) && $especiality==$sp['speciality_id']){echo "selected";}?>><?=$sp['add_doc_speciality'];?></option>;
											<?php	
												}	
											?>
											
										</select><br>
										<span style="color:red;" ><?php if(!empty($error[3])){echo $error[3]."<br><br>";}?></span>
										
										
										<!-- unique id field -->
										<label>Unique ID</label>
										<input type="text" name="unique_id" class="form-control" placeholder="Unique ID" require=""  value="<?php if(!empty($eui)){echo $eui;}?>"><br>
										<span style="color:red;" ><?php if(!empty($error[11])){echo $error[11]."<br><br>";}?></span>
										<span style="color:red;" ><?php if(!empty($error[2])){echo $error[2]."<br><br>";}?></span>
										
										
										<!-- Age Field -->
										<label>Age</label>
										<input type="text" name="age" class="form-control" placeholder="Age" require="" value="<?php if(!empty($eage)){echo $eage;}?>"><br>
										<span style="color:red;" ><?php if(!empty($error[4])){echo $error[4]."<br><br>";}?></span>
										
										
										<!-- Qualification Field -->
										<label>Qualification</label>
										<input type="text" name="qualification" class="form-control" placeholder="Qualification" require=""value="<?php if(!empty($equalification)){echo $equalification;}?>"><br>
										<span style="color:red;" ><?php if(!empty($error[5])){echo $error[5]."<br><br>";}?></span>
										
										
										<!-- Address Field -->
										<label>Address</label>
										<input type="text" name="address" class="form-control" placeholder="Address" require="" value="<?php if(!empty($eadd)){echo $eadd;}?>"><br>
										<span style="color:red;" ><?php if(!empty($error[6])){echo $error[6]."<br><br>";}?></span>
										
										
										<!-- Image Field -->
										<label>Image</label>
										<input type="file" name="image" class="form-control" placeholder="Upload picture" require=""><br>
										<span style="color:red;" ><?php if(!empty($error[7])){echo $error[7]."<br><br>";}?></span>
										<span style="color:red;" ><?php if(!empty($error[8])){echo $error[8]."<br><br>";}?></span>
										<span style="color:red;" ><?php if(!empty($error[12])){echo $error[12]."<br><br>";}?></span>
										
										<!-- Consultency Fee Field -->
										<label>Consultency Fee</label>
										<input type="text" name="fee" class="form-control" placeholder="Consultency Fee" require="" value="<?php if(!empty($efee)){echo $efee;}?>"><br>
										<span style="color:red;" ><?php if(!empty($error[9])){echo $error[9]."<br><br>";}?></span>
									</div>
                                    <div>
									<button type="submit" name="doctor_add" class="btn btn-primary block full-width m-b"><?php if(!empty($eid)){echo "Update";} else{echo "Add";}?></button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-6"><?php if(!empty($eimage)){echo "<img src='../doctors/images/$eimage' class='img-circle' height='300px' width='300px' style='margin-left:20%;'><br><br><h4 class='text-center'>$ename</h4><br><p class='text-center'>Doctors List</p>";} else {echo "<h4>Already a member</h4><p>See Doctors</p>";}?>
                                <p class="text-center">
                                    <a href="list_doc.php"><i class="fa fa-sign-in big-icon"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        <div class="footer">
            <div>
                <strong>Hospital Management System</strong> &copy;  <?php echo date("Y"); ?>
            </div>
        </div>

        </div>
        </div>


    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
</body>
</html>