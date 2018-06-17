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
                        <h4 class="page-title">Tambah Pelapor</h4> 
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="<?= base_url('C_Bencana/index');?>">Dashboard</a></li>
                            <li><a href="<?= base_url('C_Bencana/tampilPelapor');?>">Pelapor</a></li>
                            <li class="active">Tambah Pelapor</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                    <div class="white-box">
                            <form class="form-horizontal form-material" action="<?php echo base_url ('C_Users/addUserPelapor')?>" method="post">
                                <div class="form-group">
                                    <label class="col-md-12">Nama Lengkap</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="nama_pengguna"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Username</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="username" </div>
                                	</div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Wilayah</label>
                                    <div class="col-sm-12">
                                        <select class="form-control form-control-line" name="id_wilayah">
                                            <?php foreach ($allWilayah as $wilayah): ?>
												<?php if($wilayah->nama_wilayah!='Kantor Pusat'){ ?>
													<option value="<?php echo $wilayah->id_wilayah ?>"><?php echo $wilayah->nama_wilayah; ?></option>
												<?php } ?>
											<?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Password</label>
                                    <div class="col-md-12">    
                                        <input type="password" class="form-control form-control-line" name="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Simpan</button>
                                    </div>
                                </div>
                                <input type="hidden" name="status_pengguna" value="2">
                            </form>
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