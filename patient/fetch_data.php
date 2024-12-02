<?php
	$con=mysqli_connect('localhost','root','','hms');
	
	if(!empty($_POST['spe_id']))
	{
		$spec_id=$_POST['spe_id'];
	?>
	<option value disabled selected>Select Doctor</option>
<?php		
	 $select="select * from add_doctors where speciality_id='$spec_id'";
	
		if($data=mysqli_query($con,$select)){
		
			if(mysqli_num_rows($data)>0)
			{
				while($doclist=mysqli_fetch_array($data))
				{
					?>
					<option value="<?= $doclist['unique_id'];?>"> <?= $doclist['name'];?></option>
					<?php
				}
			
			}
		}
	}	
	
	
	if(!empty($_POST['fee_id']))
	{
		$fee=$_POST['fee_id'];
		$sql="select consultency_fee from add_doctors where unique_id='$fee'";
		if($result=mysqli_query($con,$sql))
		{
			if(mysqli_num_rows($result))
			{
				$fetch=mysqli_fetch_assoc($result);
				echo $fetch['consultency_fee'];
				exit();
				while($fetch=mysqli_fetch_array($result))
				{
					echo $fetch['consultency_fee'];
				}
			}
		}
	}
?>