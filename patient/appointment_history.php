<!DOCTYPE html>
<html>

<?php include('server.php');
	$doc_name_query=$doc_name_data="";
	$patient_se=$_SESSION['email'];
	$query=mysqli_query($conn,"SELECT * FROM book_appointment where profile_email='$patient_se'")or die('a');
?>
<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/table_data_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:31:11 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HMS | Appointment</title>

	<link href="../admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../admin/css/plugins/toastr/toastr.min.css" rel="stylesheet">
	<link href="../admin/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    <link href="../admin/css/animate.css" rel="stylesheet">
    <link href="../admin/css/style.css" rel="stylesheet">
	<link href="../admin/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
	
</head>

<body>
    <div id="wrapper">
    <?php include("sidebar-nav.php");?>
        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <?php include("header.php");?>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Appointment history</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>                       
                        <li class="active">
                            <strong>Appointment</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Appointment History</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
						<th>Date</th>
						<th>Doctor Name</th>
                        <th>Patient Name</th>
                        <th>Patient Email</th>
                        <th>Patient Number</th>
                        <th>Patient Age</th>
						<th>Patient Address</th>
						<th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                   <!-- 
				   Table data insert.
				   -->
				 <?php  while($fetch=mysqli_fetch_array($query)){?>
					<tr>
						<td><?php echo $fetch['datetime'];?></td>
						<td><?php $a=$fetch['unique_id'];
							$doc_name_query=mysqli_query($conn,"select * from add_doctors where unique_id='$a'")or die('b');
							$doc_name_data=mysqli_fetch_array($doc_name_query);
							echo $doc_name_data['name'];?>
							</td>
						<td><?php echo $fetch['patient_name'];?></td>
						<td><?php echo $fetch['patient_email'];?></td>
						<td><?php echo $fetch['patient_number'];?></td>
						<td><?php echo $fetch['patient_age'];?></td>
						<td><?php echo $fetch['patient_address'];?></td>
						<td><?php if($fetch['status']==1){echo "confirmed";}else {echo "pending";}?></td>
					</tr>
				 <?php }?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Date</th>
						<th>Doctor Name</th>
                        <th>Patient Name</th>
                        <th>Patient Email</th>
                        <th>Patient Number</th>
                        <th>Patient Age</th>
						<th>Patient Address</th>
						<th>Status</th>
                    </tr>
                    </tfoot>
                    </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
            <strong>Copyright: </strong> Hospital Management System &copy; <?php echo date("Y"); ?>
            </div>
        </div>
        </div>
        </div>
		
    <!-- Mainly scripts -->
    <script src="../admin/js/jquery-3.1.1.min.js"></script>
    <script src="../admin/js/bootstrap.min.js"></script>
    <script src="../admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../admin/js/plugins/dataTables/datatables.min.js"></script>
    <!-- Custom and plugin javascript -->
    <script src="../admin/js/inspinia.js"></script>
    <script src="../admin/js/plugins/pace/pace.min.js"></script>
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>
</body>
<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/table_data_tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:31:13 GMT -->
</html>