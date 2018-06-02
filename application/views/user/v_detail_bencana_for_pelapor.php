<!DOCTYPE html>
<html>
<?php $this->load->view('user/header');
?>
<style>	
	.dashboard-pelapor{
		background-color: #1F2739;
		color: 	#A7A1AE;
	}
</style>
<body class="dashboard-pelapor">
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
					<div class="col-md-6 col-md-offset-3 text-center">
						<h1 style=" color: #4DC3FA;">
							<?php 

								echo $bencana->nama_bencana; 
							?>
						</h1>	
						<p><?php echo $bencana->tanggal_bencana;?></p>	
					</div>
					
				</div>
				
		<?php } ?>
	</div>
	<div class="row">	
		<div class="col col-md-12 col-sm-12">	
			<h2 style="font-weight: bolder; margin-bottom: 50px;">Laporan Anda</h2>
			<div class="table-responsive">
			<table class="table" style="">	
				<thead class="table-cell dark-navy" style="">	
						<tr>	
							<th scope="col">Lokasi</th>
							<th scope="col">Objek Kerusakan</th>
							<th scope="col">Jenis Kerusakan</th>
							<th scope="col">Tanggal dan Waktu Lapor</th>
							<th scope="col">Aksi</th>
						</tr>
				</thead>
				<tbody class="table-cell">	
					
						<?php foreach($hasil_semua_laporan as $laporan_user){?>
							<tr>
							<td><?php echo $laporan_user->nama_wilayah ?></td>
							<td><?php echo $laporan_user->objek ?></td>
							<td><?php echo $laporan_user->jenis_kerusakan ?></td>
							<td><?php echo $laporan_user->tanggal_laporan ?></td>
							<td></td>
							</tr>
						<?php } ?>
				
				</tbody>
				
			</table>
			
		</div>
		<a href="<?= base_url('C_PelaporBencana/tambahLaporan?id_bencana=').$id_bencana;?>" class="btn btn-primary">Tambah Laporan</a>
		</div>

	</div>


</div>
</body>
</html>