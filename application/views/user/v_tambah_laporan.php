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
 				<div class="row-input">
 					<p>Objek Kerusakan</p>
 					<select name="" id="" class="form-control">
 						<option value="rumah">Rumah</option>
 						<option value="fasilitas pendidikan">Fasilitas Pendidikan</option>
 						<option value="fasilitas">Fasilitas Kesehatan</option>
 						<option value="fasilitas">Fasilitas Peribadatan</option>
 					</select>
 				</div>
 				<div class="row-input">
 					<p>Kabupaten/Kota</p>
 					<select name="" id="" class="form-control">
 						<option value="">Kab Bantul</option>
 						<option value="">Kab Sleman</option>
 						<option value="">Kodya Yogyakarta</option>
 					</select>
 				</div>
 				<div class="row-input">
 					<p>Kecamatan</p>
 					<select name="" id="" class="form-control">
 						<option value="">Kab Bantul</option>
 						<option value="">Kab Sleman</option>
 						<option value="">Kodya Yogyakarta</option>
 					</select>
 				</div>
				

 			</div>
 		</div>
 	</div>
 </body>