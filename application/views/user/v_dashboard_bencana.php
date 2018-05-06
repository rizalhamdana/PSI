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
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/style/dashboard/ben.css?ts=<?=time()?>')?>">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
	
</head>
<style>
	.thumb-slot{
		background: ;
		margin: 10px 10px;
		box-shadow: 8px 8px 10px #e6eaee;
		max-width: 300px;
	
	}
	 .caption > h3{
			

	}
</style>
<body>
	<div class="row">
		<div class="col-md-2 col-sm-12 sidebar">
			<ul class="nav nav-sidebar">
				<li class="active"><a href="<?= base_url('C_Bencana/index');?>">Bencana</a></li>
				<!--<li><a href="<?= base_url('C_Bencana/tampilPelapor');?>">Pelapor</a></li>-->		
			</ul>
		</div>
		<nav class="navbar navbar-default navbar-fixed-top col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2">
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
	</div>
	<div class="row">
		<div class="col-sm-10 col-sm-offset-2 col-md-10 col-md-offset-2 main">
	      	<div class="row">
	      		<div class="col-md-12 col-sm-12">
				    <h1 class="page-header"><?= $userAktif?></h1>
				    <a href="<?= base_url('C_Bencana/tambahBencana');?>"><input class="btn btn-primary tambah-slot" type="submit" value="Tambah Slot Laporan Bencana"></a>
				    
				</div>
	      	</div>
	      	<div class="col-md-6 col-sm-6">			
	   		</div>
	   		<div class="row">
	      		<div class="col-md-12 col-sm-12 card">
	      			<div class="row" style="">
	      				<?php foreach ($bencana as $disaster) {?>
	      			
	      				<div class="col-md-4 thumbnail thumb-slot">
	      					<div class="caption">
	      						<h3 class="text-center"><?= $disaster->nama_bencana?></h3>
	      					</div>
	      				</div>
	      				<?php } ?>
	      			</div>
	      			
	      		</div>	
	      		<!--<ul class="pagination">
						  <li class="active"><a href="#">1</a></li>
						  <li><a href="#">2</a></li>
						  <li><a href="#">3</a></li>
						  <li><a href="#">4</a></li>
						  <li><a href="#">5</a></li>
					</ul>-->
	      	</div>	
	  	</div>
	</div>
</body>
</html>