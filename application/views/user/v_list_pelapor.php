<?php $this->load->view('user/header'); ?>


<body>
	<?php $this->load->view('menu_nav'); ?>

	<div class="row">
		<div class="col-sm-10 col-sm-offset-2 col-md-10 col-md-offset-2 main">
			<div class="row">
				<div class="col-md-2 col-md-offset-10">
					<a href="<?php echo base_url('C_Users/addUserPelapor') ?>" class="btn btn-primary">Tambah Pelapor</a>
				</div>
			</div>
			<div class="row">
	      		<div class="col-md-12">
	      			<div class="table-responsive">
	      			<table class="table table-hover">
		              <thead>
		                <tr>
		                  <th>Nama</th>
		                  <th>Username</th>
		                  <th>Wilayah Kerja</th>
		                  <th>Aksi</th>
		                </tr>
		              </thead>
		              <tbody>
		              	<?php foreach ($allUser as $user): ?>
		              		<?php if ($user->status_pengguna!=1): ?>
		              			<tr>
		                  			<td><?php echo $user->nama_pengguna; ?></td>
		                 			<td><?php echo $user->username ;?></td>
		                 			<?php foreach ($allWilayah as $wilayah): ?>
		                 				<?php if ($wilayah->id_wilayah==$user->id_wilayah): ?>
		                 					<td><?php echo $wilayah->nama_wilayah ?></td>
		                 				<?php endif ?>
		                 			<?php endforeach ?>
		                 			<td><a href="<?php echo base_url('C_Users/EditDataPelapor?id_pengguna=').$user->id_pengguna; ?>" class="btn btn-success">Edit Data</a> &nbsp &nbsp <a href="#" class="btn btn-danger">Hapus</a></td>

		               			</tr>
		              		<?php endif ?>
		              	<?php endforeach ?>
		                
		              </tbody>
		            </table>	
	      			</div>
	      		</div>	
	      		</div>	
		</div>
	</div>
</body>