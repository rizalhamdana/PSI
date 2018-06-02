<?php 
	$this->load->view('user/header');
 ?>
 <head>
 	<title>Input Laporan</title>
 </head>
 <style>
 	.row-input{
 		margin: 10px 0px;
 	}
 </style>
 <body>

 	<div class="container">
 		<div class="row">
 			<div class="col col-md-6 col-md-offset-3">
 				<h1 class="text-center">Input Laporan Kerusakan</h1>
 				<br><br>
 				<form action="<?= base_url('C_PelaporBencana/tambahLaporan')?>" method="POST">
 					<input type="hidden" name="id_bencana" value="<?=$id_bencana?>">
 					<input type="hidden" name="id_wilayah" value="<?=$this->session->userdata('id_wilayah')?>">
 					<input type="hidden" name="id_pengguna" value="<?=$this->session->userdata('id_pengguna');?>">
 					<input type="hidden" name="tanggal_laporan" value="<?php echo date('Y-m-d H:i:s');?>">
 					<div class="row-input">
 						<p>Objek Kerusakan</p>
 						<select name="objek" id="" class="form-control">
 							<option value="Rumah">Rumah</option>
 							<option value="Fasilitas Pendidikan">Fasilitas Pendidikan</option>
 							<option value="Fasilitas Kesehatan">Fasilitas Kesehatan</option>
 							<option value="Fasilitas Peribadatan">Fasilitas Peribadatan</option>
 						</select>
 					</div>
 					<div class="row-input">
 						<p>Jenis Kerusakan</p>
 						<select name="id_kerusakan" id="" class="form-control">
 							<?php foreach ($jenis_rusak as $kerusakan ): ?>
 								<option value="<?=$kerusakan->id_kerusakan?>"><?= $kerusakan->jenis_kerusakan ?></option>
 							<?php endforeach ?>
 						</select>
 					</div>
 					<div class="row-input">
 						<input type="submit" class="btn btn-primary">
 					</div>
 				</form>
 				

 			</div>
 		</div>
 	</div>
 </body>