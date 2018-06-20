<?php $this->load->helper('html'); ?>
<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('user/header'); ?>
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
                        <h4 class="page-title">Dashboard</h4> 
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="<?= base_url('C_Bencana/tambahBencana');?>" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Tambah Bencana</a>
                        <ol class="breadcrumb">
                            <li class="active">Dashboard</li>
                            <!--<li class="active">Blank Page</li>-->
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    
                        <?php foreach ($bencana as $disaster) {?>
                        <div class="col-md-4">
                        <div class="white-box">
                            <div class="caption">
                                <h3 class="text-center"><a href="<?= base_url('C_Bencana/bukaDetailBencana?id_bencana='.$disaster->id_bencana);?>"><?= $disaster->nama_bencana?></a>
                                </h3>
                                <p class="text-center"><?= $disaster->nama_wilayah; ?></p>
                                <p class="text-center"><?=$disaster->tanggal_bencana;?></p>
                            </div>
                        </div>
                        </div>
                        <?php } ?>
                    
                    <div class="col-md-12">
                    	<?php 
			      			foreach ($dataChart as $dataChart) {
			      				$jenis_bencana[]=$dataChart->jenis_bencana;
			      				$jumlahBencana[]= (integer) $dataChart->jumlah_bencana;
			      			}
			      		?>
                        <div class="white-box">
                            <h3 class="box-title">Jumlah Bencana</h3> 
							<div class="bar-char">
							<canvas width="13" height="3" id="myBarChart" class=""></canvas>
							 	<script>
									var steps = 1;
									var ctx = $("#myBarChart");
									var myChart = new Chart(ctx, {
				    					type: 'bar',
				   						data: {
				       						labels: <?php echo json_encode($jenis_bencana)?>,
				       						datasets:[{
                                                label:"Jumlah Bencana",
				           						data: <?php echo json_encode($jumlahBencana);?> ,
				            					backgroundColor:'rgba(54, 162, 235)',
				           						
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
                        <?php 
                            foreach ($dataLineChartTahunan as $dataLineChart) {
                                $tahunan[]=$dataLineChart->tahun;
                                $jumlahBencanaPerTahun[]= $dataLineChart->jumlah;
                            }

                        ?>
                        <div class="white-box">
                            <h3 class="box-title">Bencana Per Tahun</h3>
                            <div class="line-chart">
                                <canvas width="13" height="3" id="myLineChart"></canvas>
                                <script>
                                    var ctx = document.getElementById('myLineChart').getContext('2d');
                                    var chart = new Chart(ctx, {
                                        // The type of chart we want to create
                                        type: 'line',

                                        // The data for our dataset
                                        data: {
                                            labels: <?php echo json_encode($tahunan)?>,
                                            datasets: [{
                                                label: "Jumlah Bencana",
                                                backgroundColor: 'rgb(255, 99, 132)',
                                                borderColor: 'rgb(255, 99, 132)',
                                                data: <?php echo json_encode($jumlahBencanaPerTahun);?>,
                                            }]
                                        },

                                        // Configuration options go here
                                        options: {}
                                    });
                                </script>
                            </div>
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
</body>
</html>