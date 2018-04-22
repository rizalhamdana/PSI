<?php $this->load->helper('url'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/style/dashboard.css')?>">
	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Logo</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href=""></a></li>
					<li><a href=""></a></li>
					<li><a href=""></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
					<li><a href="<?= base_url('C_Users/logout');?>"><span class="glyphicon glyphicon-log-out"></span></a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container-fluid">
	  <div class="row">
	    	<div class="col-md-2 col-sm-2 sidebar">
				<ul class="nav nav-sidebar">
					<li><a href="#">Bencana</a></li>
					<li class="active"><a href="#">Pelapor</a></li>		
				</ul>
			</div>
		</div>
	  		<div class="col-sm-10 col-sm-off set-2 col-md-10 col-md-offset-2 main">
	      		<h1 class="page-header"><?= $userAktif?></h1>
	      		<div class="col-md-6">
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
	      		<div class="col-md-6">
					<canvas width="10" height="5" id="myBarChart" class=""></canvas>
					 <script>
						var ctx = document.getElementById("myBarChart");
						var myChart = new Chart(ctx, {
    						type: 'bar',
    						data: {
        						labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        						datasets: [{
            						label: '# of Votes',
            						data: [1, 19, 3, 5, 2, 3],
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
	      		<div class="row">
	      		<div class="col-md-12">
	      			<div class="table-responsive">
	      			<table class="table table-hover">
		              <thead>
		                <tr>
		                  <th>Nama</th>
		                  <th>Username</th>
		                </tr>
		              </thead>
		              <tbody>
		                <tr>
		                  <td>Lorem</td>
		                  <td>ipsum</td>
		                </tr>
		              

				                <tr>
		                  <td>1,002</td>
		                  <td>amet</td>
		                </tr>
		                <tr>
		                  <td>1,002</td>
		                  <td>amet</td>
		                </tr>

		              </tbody>
		            </table>	
	      			</div>
	      		</div>	
	      		</div>	
	      		
	  		</div>
	 	</div>
	</div>		        
	</nav>
	
</body>
</html>