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
					<p><select name="" id="" class="form-control" style="max-width: 200px;">
						<option value="" selected="selected">Wilayah Bencana</option>
						<option value="">D.I Yogyakarta</option>
					</select></p>
					<p><input type="date" name="Date" class="form-control" placeholder="Tanggal terjadi Bencana"></p>
					<input type="submit" value="Submit" class="btn btn-success">
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>