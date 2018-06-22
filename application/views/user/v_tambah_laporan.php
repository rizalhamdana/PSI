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
					<form action="<?= base_url('C_PelaporBencana/tambahLaporan')?>" method="POST" class="form-horizontal form-material" onsubmit="return validateForm()" name="formInputLaporan">
 					<input type="hidden" name="id_bencana" value="<?=$id_bencana?>">
 					<input type="hidden" name="id_wilayah" value="<?=$this->session->userdata('id_wilayah')?>">
 					<input type="hidden" name="id_pengguna" value="<?=$this->session->userdata('id_pengguna');?>">
 					<input type="hidden" name="tanggal_laporan" value="<?php echo date('Y-m-d H:i:s');?>">
 					<div class="row-input">
 						<p style="font-weight: bolder;">Objek Kerusakan</p>
 						<select name="objek" id="" class="form-control form-control-line" required>
 							<option value="Rumah">Rumah</option>
 							<option value="Fasilitas Pendidikan">Fasilitas Pendidikan</option>
 							<option value="Fasilitas Kesehatan">Fasilitas Kesehatan</option>
 							<option value="Fasilitas Peribadatan">Fasilitas Peribadatan</option>
 						</select>
 					</div>
 					<div class="row-input">
 						<p style="font-weight: bolder">Persentase Kerusakan Komponen Struktur Bangunan</p>
 						<p id="alertStruktur" style="font-size: 14; color:red;"></p>
 						<input type="number" class="form-control form-control-line" name="komponenStruktur" required>
 					</div>
 					<div class="row-input">
 						<p style="font-weight: bolder">Persentase Kerusakan Komponen Penunjang Bangunan</p>
 						<p id="alertPenunjang" style="font-size: 14; color:red;"></p>
 						<input type="number" class="form-control form-control-line" name="komponenPenunjang" required>
 					</div>
 					<div class="row-input">
 						<p style="font-weight: bolder;">Lokasi</p>
 						<textarea name="lokasi" class="form-control form-control-line" required></textarea>
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
	<script>
		function validateForm(){
			document.getElementById('alertPenunjang').innerHTML="";
			document.getElementById('alertStruktur').innerHTML="";
			var persenStruktur=document.forms["formInputLaporan"]['komponenStruktur'].value;
			var persenPenunjang=document.forms["formInputLaporan"]['komponenPenunjang'].value;
			if(persenStruktur<0||persenStruktur>100){
				//alert('Persentase harus di antara 0 dan 100');
				document.getElementById('alertStruktur').innerHTML="*Persentase kerusakan komponen struktur harus di antara 0 dan 100";
				return false;
			}
			if(persenPenunjang<0||persenPenunjang>100){
				document.getElementById('alertPenunjang').innerHTML="*Persentase kerusakan komponen penunjang harus di antara 0 dan 100";
				return false;
			}
		}
	</script>
 	
 </body>