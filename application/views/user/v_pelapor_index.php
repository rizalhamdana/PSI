<!DOCTYPE html>
<html>
<?php $this->load->view('user/header');?>
<body class="fix-header">
 <?php $this->load->view('menu_nav') ?>
<div id="wrapper">
	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title"><?php echo $this->session->userdata('nama_pengguna'); ?></h4> 
                    </div>
                   
                    <!-- /.col-lg-12 -->
                </div>
		
			<div class="row">
				<?php foreach ($result as $bencana) {?>
					<div class="col-md-4 white-box" style="margin: 10px 10px;">
						<h3 class="text-center"><a href="<?php 	echo base_url('C_PelaporBencana/viewBencanaPelapor?id_bencana=').$bencana->id_bencana; ?>" style="text-decoration: none;"><?php echo $bencana->nama_bencana; ?></a>
						</h3>
						<p class="text-center"><?= $bencana->nama_wilayah;?></p>
						<p class="text-center"><?= $bencana->tanggal_bencana;?></p>
							
					</div>
				<?php } ?>		
			</div>
		</div>
	</div>
</div>

</body>
</html>