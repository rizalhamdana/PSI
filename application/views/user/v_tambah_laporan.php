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
 <body class="fix-header">
	<?php $this->load->view('menu_nav') ?>
	<div id="wrapper">
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row bg-title">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    	<h4 class="page-title">Input Laporan Kerusakan</h4> 
                 	</div>
				</div>
				<div class="row">
					<div class="white-box">
					<form action="<?= base_url('C_PelaporBencana/tambahLaporan')?>" method="POST" class="form-horizontal form-material">
 					<input type="hidden" name="id_bencana" value="<?=$id_bencana?>">
 					<input type="hidden" name="id_wilayah" value="<?=$this->session->userdata('id_wilayah')?>">
 					<input type="hidden" name="id_pengguna" value="<?=$this->session->userdata('id_pengguna');?>">
 					<input type="hidden" name="tanggal_laporan" value="<?php echo date('Y-m-d H:i:s');?>">
 					<div class="row-input">
 						<p>Objek Kerusakan</p>
 						<select name="objek" id="" class="form-control form-control-line">
 							<option value="Rumah">Rumah</option>
 							<option value="Fasilitas Pendidikan">Fasilitas Pendidikan</option>
 							<option value="Fasilitas Kesehatan">Fasilitas Kesehatan</option>
 							<option value="Fasilitas Peribadatan">Fasilitas Peribadatan</option>
 						</select>
 					</div>
 					<div class="row-input">
 						<p>Persentase Kerusakan Komponen Struktur Bangunan</p>
 						<input type="number" class="form-control form-control-line" name="komponenStruktur">
 					</div>
 					<div class="row-input">
 						<p>Persentase Kerusakan Komponen Penunjang Bangunan</p>
 						<input type="number" class="form-control form-control-line" name="komponenPenunjang">
 					</div>
 					<div class="row-input">
 						<p>Lokasi</p>
 						<textarea name="lokasi" class="form-control form-control-line"></textarea>
 					</div>
 					<div class="row-input">
 						<input type="submit" class="btn btn-primary">&nbsp
 						<a href="<?= base_url('C_PelaporBencana/viewBencanaPelapor?id_bencana='.$id_bencana)?>" class="btn btn-danger">Cancel</a>
 					</div>
 				</form>
				</div>
			</div>
			</div>
			
		</div>
	</div>
 	
 </body>