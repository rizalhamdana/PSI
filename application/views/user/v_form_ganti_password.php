<?php $this->load->helper('html'); ?>
<!DOCTYPE html>
<html>
<head>
	>
	<?php $this->load->view('user/header'); ?>
	<title>Ganti Password</title
</head>
<body class="fix-header">
	<?php $this->load->view('menu_nav') ?>
	<div id="wrapper">
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row bg-title">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Ganti Password</h4> 
                    </div>
				</div>
				<div class="row">
					<div class="white-box">
						<form action="<?php echo base_url('C_Users/gantiPassword?id_pengguna='.$pengguna->id_pengguna) ?>" class="horizontal-line form-material" method="POST" onsubmit="return validateForm()" name="formGantiPassword">
							<input type="hidden" name="id_pengguna" value="<?php echo $pengguna->id_pengguna ?>">
								<div class="form-group">
                                    <label class="col-md-12">Password lama</label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control form-control-line" name="password_lama" required="true">
                                        <p id="alertPasswordLama" style="font-size: 14; color:red;"></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Password baru</label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control form-control-line" name="password_baru" required="true">
                                        <p id="alertPasswordBaru" style="font-size: 14; color:red;"></p>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Konfirmasi Password</label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control form-control-line" name="kon_password_baru" required="true">
                                        <p id="alertKonfirmasiPasswordBaru" style="font-size: 14; color:red;"></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                   	<div class="col-sm-12">
                                        <button class="btn btn-success">Ganti Password</button>
                                    </div>
                                </div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		function validateForm(){
			document.getElementById('alertPasswordLama').innerHTML="";
			document.getElementById('alertPasswordBaru').innerHTML="";
			document.getElementById('alertKonfirmasiPasswordBaru').innerHTML="";
			var password_lama=document.forms["formGantiPassword"]['password_lama'].value;
			var password_baru=document.forms["formGantiPassword"]['password_baru'].value;
			var kon_password_baru=document.forms["formGantiPassword"]['kon_password_baru'].value;

			if(password_lama!=<?php echo json_encode($pengguna->password) ;?>){
				document.getElementById('alertPasswordLama').innerHTML="Password lama tidak sesuai";
				console.log('beda password');
				return false;
			}

			if(password_baru!=kon_password_baru){
				document.getElementById('alertKonfirmasiPasswordBaru').innerHTML="Konfirmasi password harus sama dengan password baru";
				return false;
			}
		}
	</script>
</body>
</html>