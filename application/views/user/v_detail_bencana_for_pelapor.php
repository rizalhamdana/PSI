<!DOCTYPE html>
<html>
<?php $this->load->view('user/header');
		$bencana=$result;

?>

<body>
<nav class="navbar navbar-default navbar-static-top col-md-12 col-sm-12">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="#" class="navbar-brand">CrashReport</a>
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
<div class="container">
	<a href="<?php echo base_url('C_PelaporBencana')?>" class="btn btn-primary">Kembali ke Halaman Utama</a>
	<div class="row">
		<?php 
			foreach($result as $bencana){?>		
				<div class="col col-md-12">
					<h1>
						<?php 

						echo $bencana->nama_bencana; 
						?>
					</h1>	
					<p><?php echo $bencana->tanggal_bencana;?></p>
				</div>
				
		<?php } ?>
	</div>


</div>
</body>
</html>