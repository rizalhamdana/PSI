<div class="row">
		<div class="col-md-2 col-sm-12 sidebar">
			<div class="col-md-12" style="margin:50px 0;">
					<img src="<?php echo base_url('assets/images/user-logo.png') ?>" alt="" class="img-responsive img-circle" style="max-width: 128px; margin: 0 auto;">
					<div class="text-center">
						<h4><?php echo $this->session->userdata('nama_pengguna'); ?></h4>
					</div>
			</div>
			
			<ul class="nav nav-sidebar">
				
				<div class="input-group col-md-12">
					<li>
						<span class="glyphicon glyphicon-dashboard"></span>
						<a href="<?= base_url('C_Bencana/index');?>">Dashboard</a>
					</li></div>
				<br>
				<br>
				<div class="input-group">
					<li>
						<span class="glyphicon glyphicon-user"></span>
						<a href="<?= base_url('C_Bencana/tampilPelapor');?>">Pelapor</a>
					</li>	
				</div>	
			</ul>
		</div>
		<nav class="navbar navbar-default navbar-fixed-top col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="#" class="navbar-brand">CrashReport</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
						<li><a href="<?= base_url('C_Users/logout');?>"><span class="glyphicon glyphicon-log-out"></span></a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>