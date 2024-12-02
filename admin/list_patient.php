<?php include('sidebar.php');?>

        <div id="page-wrapper" class="gray-bg">
        <?php include('header.php');?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>List of Patients</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Dashboard</a>
                        </li>
                        <li class="active">
                            <strong>List of Patients</strong>
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
                        <h5>List of Patients</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
						<tr>
							<th>Doctor Name</th>
							<th>Unique ID of Doctor</th>
							<th>Appointment Date</th>
							<th>Patient Name</th>
							<th>Patient Email</th>
							<th>Patient Number</th>
							<th>Patient Age</th>
							<th>Patient Address</th>
							<th>action</th>
						</tr>
                    </thead>
                    <tbody>
                    <?php
					$select=mysqli_query($conn,"select * from add_doctors inner join book_appointment ON book_appointment.unique_id=add_doctors.unique_id");
					while($result=mysqli_fetch_array($select))
					{
						?>
						<tr>
							<td><?= $result['name'];?></td>
							<td><?= $result['unique_id'];?></td>
							<td><?= $result['datetime'];?></td>
							<td><?= $result['patient_name'];?></td>
							<td><?= $result['patient_email'];?></td>
							<td><?= $result['patient_number'];?></td>
							<td><?= $result['patient_age'];?></td>
							<td><?= $result['patient_address'];?></td>
							<td><?php if($result['status']==0){?><a style='text-decoration:none;' href='list_patient.php?confirm=<?=$result['id']?>'>Confirm</a><?php } else {?> <a style='text-decoration:none;' href='list_patient.php?deny=<?=$result['id']?>'>Deny</a><?php }?></td>
						</tr>
				<?php
					}
				?>
                    </tbody>
                    <tfoot>
						<tr>
							<tr>
							<th>Doctor Name</th>
							<th>Unique ID of Doctor</th>
							<th>Appointment Date</th>
							<th>Patient Name</th>
							<th>Patient Email</th>
							<th>Patient Number</th>
							<th>Patient Age</th>
							<th>Patient Address</th>
							<th>action</th>
						</tr>
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

    <script src="js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

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
