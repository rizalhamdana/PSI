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
</head>
<body>
	<nav class="navbar navbar-default">
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
	    	<div class="col-md-2 sidebar">
				<ul class="nav nav-sidebar">
					<li class="active"><a href="#">Bencana</a></li>
					<li><a href="#">Pelapor</a></li>		
				</ul>
			</div>
	  		<div class="col-sm-10 col-sm-off set-2 col-md-11 col-md-offset-1 main">
	      		<h1 class="page-header">Pelapor</h1>
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
	</nav>
	
</body>
</html>