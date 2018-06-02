<?php $this->load->helper('html'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<META HTTP-EQUIV="Pragma" CONTENT="no-cache"> <META HTTP-EQUIV="Expires" CONTENT="-1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- "?ts=<?=time()?>" digunakan untuk update css di browser setiap css diubah-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/style/dashboard/pel.css?ts=<?=time()?>')?>">
	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
</head>
<body>
	<?php $this->load->view('menu_nav') ?>
	<div class="row">
		<div class="col-sm-10 col-sm-offset-2 col-md-10 col-md-offset-2 main">
	      	
	      	
	      	<?php foreach ($search as $disaster) {?>
			
	      	<h1 class="page-header">
	      		<?= $disaster->nama_bencana?>
	      	<?php } ?></h1>
	      	<div class="col-md-6 col-sm-6">
	      		<div class="card">
				<canvas width="10" height="5" id="myLineChart" class=""></canvas>
	      		<script>	
	      			var ctx = document.getElementById('myLineChart').getContext('2d');
					var chart = new Chart(ctx, {
    				// The type of chart we want to create
		    		type: 'line',

  				  // The data for our dataset
    				data: {
       				 labels: ["January", "February", "March", "April", "May", "June", "July"],
        			datasets: [{
            			label: "My First dataset",
            			backgroundColor: 'rgb(255, 99, 132)',
            			borderColor: 'rgb(255, 99, 132)',
            			data: [0, 10, 5, 2, 20, 30, 45],
        				}]
    				},

    				// Configuration options go here
    				options: {}
					});
	      		</script>	
	      		</div>
	      		</div>
	      	<div class="col-md-6 col-sm-6">
	      		<div class="card">
				<canvas width="10" height="5" id="myBarChart" class=""></canvas>
				 <script>
					var ctx = document.getElementById("myBarChart");
					var myChart = new Chart(ctx, {
    					type: 'bar',
   						data: {
       						labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
       						datasets: [{
           						label: '# of Votes',
           						data: [12, 19, 3, 5, 2, 3],
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
        						scales: {
            						yAxes: [{
		          						ticks: {
        	            					beginAtZero:true
           								}
       								}]
       							}
   							}
					});
				</script>
	   		</div>
	   		</div>
	   		<div class="row">
	      		<div class="col-md-12">
	      			<div class="table-responsive">
	      			<table class="table table-hover">
		              <thead>
		                <tr>
		                  <th>Pelapor</th>
		                  <th>Objek</th>
		                  <th>Kerusakan</th>
		                  <th>Tanggal Laporan</th>
		                </tr>
		              </thead>
		              <?php foreach ($laporan as $lap) {?>
		              <tbody>
		                <tr>
		                  <td><?= $lap->nama_pengguna ?></td>
		                  <td><?= $lap->objek ?></td>
		                  <td><?= $lap->jenis_kerusakan ?></td>
		                  <td><?= $lap->tanggal_laporan?></td>
		                </tr>
		              </tbody>
		              <?php } ?>	
		            </table>
	      			</div>
	      		</div>	
	      		</div>	
	      		
	  		</div>
		</div>
</body>
</html>