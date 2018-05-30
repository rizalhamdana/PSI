<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('user/header'); ?>
	<title>Login</title>
</head>
<style>
	.cover-login{
		margin-top: 100px; 
		background-color: white; 
		padding: 100px 30px;
		border-radius: 8px;
		background-color: rgba(0,0,0,0.5);
	}
	.btn-login{
		background-color: #222C3C;
		border-color: #222C3C; 
	}
	.btn-login:hover{
		background-color: #324159;
		border-color: #324159; 

	}
</style>
<body style="background-image: url('<?= base_url('assets/images/bglogin.jpg');?>')">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-8 col-xs-offset-2" >
				<div class="text-center cover-login"  >	
					<h1 style="font-family: 'Ubuntu'; color: white">Log in</h1>
					<br>
					<form action="<?= base_url('C_Users/login')?>" method="post">
						<p>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" name="username" placeholder="Username" class="form-control">
							</div>
						</p>
						<p>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input type="password" name="password" placeholder="Password" class="form-control">					
							</div>
						</p>
						<p></p>
						<input type="submit" class="btn btn-success btn-login" style="width: 100%" value="Log in">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>