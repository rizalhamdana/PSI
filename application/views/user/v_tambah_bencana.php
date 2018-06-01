<?php $this->load->helper('html'); ?>

<!DOCTYPE html>
<html lang="en">
<?php 
$this->load->view('user/header')
?>
<body>
	<div class="container" style="padding-top: 50px;">
		<div class="row">

			<div class="col-md-6">
				<h2>Tambah Slot Laporan Bencana</h2>
				<br>
				<form action="<?= base_url('C_Bencana/tambahBencana')?>" method="post">
					<p><input type="text" name="Bencana" placeholder="Nama Bencana" class="form-control"></p>
					<p>Jenis Bencana: 
						<select name="jenis_bencana" class="form-control">
						<?php foreach ($jenis_bencana as $jenis) {?>
							<option value="<?= $jenis->jenis_bencana ?>"><?php echo $jenis->jenis_bencana ?></option>
						<?php } ?>

					</select></p>
					
					<p>Wilayah Bencana: <select name="Wilayah" id="" class="form-control" style="max-width: 200px;">
						
						<?php
							foreach ($wilayah as $wilayah) {?>
							<?php if($wilayah->nama_wilayah!="Kantor Pusat"){ ?>
								<option value="<?php echo $wilayah->id_wilayah;?>"><?php echo $wilayah->nama_wilayah?></option>
							<?php }
						}?>
					</select></p>
					<p><input type="date" name="Date" class="form-control" placeholder="Tanggal terjadi Bencana"></p>
					<input type="submit" value="Submit" class="btn btn-success">
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>