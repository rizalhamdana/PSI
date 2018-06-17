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

 	<div class="container" style="margin-top:50px; margin-bottom: 50px;  ">
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
 						<p>Persentase Kerusakan Komponen Struktur Bangunan</p>
 						<input type="number" class="form-control" name="komponenStruktur">
 					</div>
 					<div class="row-input">
 						<p>Persentase Kerusakan Komponen Penunjang Bangunan</p>
 						<input type="number" class="form-control" name="komponenPenunjang">
 					</div>
 					<div class="row-input">
 						<p>Lokasi</p>
 						<textarea name="lokasi"  cols="30" rows="10" class="form-control"></textarea>
 					</div>
 					<div class="row-input">
 						<input type="submit" class="btn btn-primary">&nbsp
 						<a href="<?= base_url('C_PelaporBencana/viewBencanaPelapor?id_bencana='.$id_bencana)?>" class="btn btn-danger">Cancel</a>
 					</div>
 				</form>
 				

 			</div>
 		</div>
 	</div>
 </body>