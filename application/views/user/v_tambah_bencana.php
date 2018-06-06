<?php $this->load->helper('html'); ?>
<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('user/header'); ?>
</head>
<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- Sidebar + Navbar -->
    <!-- ============================================================== -->
    <?php $this->load->view('menu_nav') ?>

    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page Content -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Tambah Bencana</h4> 
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="<?= base_url('C_Bencana/index');?>">Dashboard</a></li>
                            <li class="active">Tambah Bencana</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <div class="white-box">
	                            <form class="form-horizontal form-material" action="<?= base_url('C_Bencana/tambahBencana')?>" method="post">
	                                <div class="form-group">
	                                    <label class="col-md-12">Nama Bencana</label>
	                                    <div class="col-md-12">
	                                        <input type="text" class="form-control form-control-line" name="Bencana">
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <label class="col-md-12">Tanggal Bencana</label>
	                                    <div class="col-md-12">
	                                        <input type="date" class="form-control form-control-line" name="Date">
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <label class="col-sm-12">Jenis Bencana</label>
	                                    <div class="col-sm-12">
	                                        <select class="form-control form-control-line" name="jenis_bencana">
	                                            <<?php foreach ($jenis_bencana as $jenis) {?>
													<option value="<?= $jenis->jenis_bencana ?>"><?php echo $jenis->jenis_bencana ?></option>
												<?php } ?>
	                                        </select>
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <label class="col-sm-12">Wilayah</label>
	                                    <div class="col-sm-12">
	                                        <select class="form-control form-control-line" name="Wilayah">
	                                            <?php
													foreach ($wilayah as $wilayah) {?>
													<?php if($wilayah->nama_wilayah!="Kantor Pusat"){ ?>
														<option value="<?php echo $wilayah->id_wilayah;?>"><?php echo $wilayah->nama_wilayah?></option>
													<?php }
												}?>
	                                        </select>
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <div class="col-sm-12">
	                                        <button class="btn btn-success">Simpan</button>
	                                    </div>
	                                </div>
	                            </form>
                        	</div>
                        </div>
                    </div>
                </div>
            <!-- /.container-fluid -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- /#wrapper -->
</body>
</html>