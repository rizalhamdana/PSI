<?php $this->load->helper('html'); ?>
<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('user/header'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>
<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- Sidebar + Navbar -->
    <!-- ============================================================== -->
    <?php $this->load->view('menu_nav') ?>

    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">
                        <?php foreach ($search as $disaster) {?>
				      		<?= $disaster->nama_bencana?>
				      	<?php } ?>
                    	</h4> 
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="<?= base_url('C_Bencana/index');?>">Dashboard</a></li>
                            <li class="active">
                            	<?php foreach ($search as $disaster) {?>
				      				<?= $disaster->nama_bencana?>
				      			<?php } ?>
				      		</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
						<?php foreach ($dataBarChart as $data) {
				      		$data_diagramBar[]=$data->count_objek;
				      		$objek[]=$data->objek;
				      	} ?>
				      	<?php foreach ($dataChart as $data) {
				      		$data_diagram[]=$data->count_jenis_kerusakan;
				      		$jenis_kerusakan[]=$data->jenis_kerusakan;
				      	} ?>
                    <div class="col-md-6">
                    	<div class="white-box">
                    	<h3 class="box-title">Objek Kerusakan</h3> 
	                        <canvas width="10" height="7" id="myChart" class=""></canvas>
				      		<script>	
				      			var ctx = document.getElementById("myChart").getContext('2d');
								var myChart = new Chart(ctx, {
			    					type: 'bar',
			    					data: {
			        					labels: <?php echo json_encode($objek)?>,
			        					datasets: [{
			           						label: '# of Votes',
			            					data: <?php echo json_encode($data_diagramBar)?>,
			            					backgroundColor: [
			                				'rgba(255, 99, 132)',
			                				'rgba(54, 162, 235)',
			                				'rgba(255, 206, 86)',
			               				 	'rgba(75, 192, 192)',
			                				'rgba(153, 102, 255)',
			                				'rgba(255, 159, 64)'
			            				],
			            				borderColor: [
			                			'rgba(255,99,132,1)',
			                			'rgba(54, 162, 235, 1)',
			               			 	'rgba(255, 206, 86, 1)',
			                			'rgba(75, 192, 192, 1)',
			                			'rgba(153, 102, 255, 1)',
			                			'rgba(255, 159, 64, 1)'
			            				],
			            				borderWidth: 1
			       				 }]
			    				},
					   				options: {
					       			 	scales: {
					          			  yAxes: [{
					             		   ticks: {
					                		    beginAtZero:true,
					        	            					callback: function(value) {if (value % 1 === 0) {return value;}}
					               			 }
					            			}]
					        			}
					    			}
								});
				      		</script>	
                    	</div>
                	</div>
					<div class="col-md-6">
                    	<div class="white-box">
						<h3 class="box-title">Jenis Kerusakan</h3> 
                    		<canvas width="10" height="7" id="myBarChart" class=""></canvas>
								 <script>
									var ctx = document.getElementById("myBarChart");
									var myChart = new Chart(ctx, {
				    					type: 'doughnut',
				   						data: {
				       						labels:<?php echo json_encode($jenis_kerusakan)?>,
				       						datasets: [{
				           						label: '# of Votes',
				           						data: <?php echo json_encode($data_diagram)?>,
				            					backgroundColor: [
				                					'rgba(255, 99, 132, 1)',
				               						'rgba(54, 162, 235, 1)',
				           							'rgba(255, 206, 86, 1)',
				           							'rgba(75, 192, 192, 1)',
				                					'rgba(153, 102, 255, 1)',
				                					'rgba(255, 159, 64, 1)'
				            					],
				           						borderColor: [
				       					   	 	   'rgba(255,99,132,1)',
				                					'rgba(54, 162, 235, 1)',
				                					'rgba(255, 206, 86, 1)',
				                					'rgba(75, 192, 192, 1)',
				                					'rgba(153, 102, 255, 1)',
				                					'rgba(255, 159, 64, 1)'
				            					],
				            					borderWidth: 1
				        					}]
				    					},
				  							options: {
				        						
				   							}
									});
								</script>
                    	</div>
                    </div>
					<div class="col-md-12">
                    	<div class="white-box">
							<h3 class="box-title">Data Kerusakan</h3>
                            <div class="table-responsive">
                                <table class="display" id="example" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Pelapor</th>
                                            <th>Objek</th>
                                            <th>Kerusakan</th>
                                            <th>Tanggal Laporan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($laporan as $lap) {?>
                                        <tr>
                                          <td><?= $lap->nama_pengguna ?></td>
						                  <td><?= $lap->objek ?></td>
						                  <td><?= $lap->jenis_kerusakan ?></td>
						                  <td><?= $lap->tanggal_laporan?></td>
                                        </tr>
                                	<?php } ?>
                                	</tbody>
                                </table> 
						</div>
					</div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- /#wrapper -->
    <script>
	$(document).ready(function() {
    	$('#example').DataTable();
	} );
	</script>
</body>
</html>
