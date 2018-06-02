<?php 
	$this->load->view('user/header');
	$selected_objek=$hasil->objek;
	$selected_jenis_kerusakan=$hasil->id_kerusakan;
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
 				<form action="<?= base_url('C_PelaporBencana/ubahLaporan/'.$id_bencana.'?id_laporan='.$id_laporan)?>" method="POST">
 					<input type="hidden" name="id_bencana" value="<?=$id_bencana?>">
 					<input type="hidden" name="id_wilayah" value="<?=$this->session->userdata('id_wilayah')?>">
 					<input type="hidden" name="id_pengguna" value="<?=$this->session->userdata('id_pengguna');?>">
 					<input type="hidden" name="tanggal_laporan" value="<?php echo date('Y-m-d H:i:s');?>">
 					<div class="row-input">
 						<p>Objek Kerusakan</p>
 						<select name="objek" id="" class="form-control">
 							<option value="Rumah"  <?php if ($selected_objek == "Rumah") echo "selected"; ?>>Rumah</option>
 							<option value="Fasilitas Pendidikan" <?php if ($selected_objek == "Fasilitas Pendidikan") echo "selected"; ?>>Fasilitas Pendidikan</option>
 							<option value="Fasilitas Kesehatan" <?php if ($selected_objek == "Fasilitas Kesehatan") echo "selected"; ?>>Fasilitas Kesehatan</option>
 							<option value="Fasilitas Peribadatan"  <?php if ($selected_objek == "Fasilitas Peribadatan") echo "selected"; ?>>Fasilitas Peribadatan</option>
 						</select>
 					</div>
 					<div class="row-input">
 						<p>Jenis Kerusakan</p>
 						<select name="id_kerusakan" id="" class="form-control">
 							<?php foreach ($jenis_rusak as $kerusakan ): ?>
 								<option value="<?=$kerusakan->id_kerusakan?>" <?php if ($kerusakan->id_kerusakan == $selected_jenis_kerusakan) echo "selected"; ?>><?= $kerusakan->jenis_kerusakan ?></option>
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