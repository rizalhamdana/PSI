<?php 
	$this->load->view('user/header');
 ?>
 <body>
 	<div class="container">
 		<h1>Tambah Pelapor</h1>
 		<div class="row">
 			<div class="col-md-6">
 				<form action="<?php echo base_url('C_Users/addUserPelapor') ?>" method="post">
 					<p><input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_pengguna"></p>
					<p><input type="text" class="form-control" placeholder="Username" name="username"></p>
					<p><input type="password" class="form-control" placeholder="Password" name="password"></p>
					<input type="hidden" name="status_pengguna" value="2">
					<p>Wilayah Kerja: &nbsp<select name="id_wilayah" id="" class="form-control" style="max-width: 200px;display: inline;">
						<?php foreach ($allWilayah as $wilayah): ?>
							<?php if($wilayah->nama_wilayah!='Kantor Pusat'){ ?>
								<option value="<?php echo $wilayah->id_wilayah ?>"><?php echo $wilayah->nama_wilayah; ?></option>
							<?php } ?>
						<?php endforeach ?>
					</select></p>
					<p><input type="submit" class="btn btn-primary"></p>
 				</form>
 			</div>
 		</div>
 	</div>
 	
 </body>
 </html>