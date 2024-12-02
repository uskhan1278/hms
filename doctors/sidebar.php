<?php include'server.php'; ?>
<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
						<?php if(isset($_SESSION['unique_id'])){
							$unique_id=$_SESSION['unique_id'];
							$image=mysqli_query($con,"SELECT * FROM add_doctors WHERE unique_id='$unique_id'");
							$img=mysqli_fetch_array($image);?>
                            <img alt="image" class="img-circle" height="100px" width="100px"src="images/<?php echo $img['image'];?>" />
                              <?php } ?></span>
							<span class="block m-t-xs"> <strong class="font-bold" style="color:#16c6d8;"><h1><?php echo $_SESSION['username'];?></h1></strong>
                             </span> <span class="text-muted text-xs block"><b>Doctor</b></span> </span> </a>
                            
                        </div>
                     <div class="logo-element">
                            HMS+
                        </div>
                    </li>
                    <li class="active">						
                        <a href="index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
					</li>
                    <li class="active"><a href="profile.php?profile=<?php echo $_SESSION['unique_id'];?>"><i class="fa fa-user"></i><span class="nav-label">Doctor Profile</span></a>
					</li>
                    
					<li class="active"><a href="appointment_history.php"><i class="fa fa-edit"></i><span class="nav-label">Appointment History</span>
					</li>
                </ul>

            </div>
        </nav>
