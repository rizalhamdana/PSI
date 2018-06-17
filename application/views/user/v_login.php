<!DOCTYPE html>
<html>
<head>
	<?php //$this->load->view('user/header'); ?>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('assets/css/login-style.css?ts=<?=time()')?>">

<!-- Optional theme -->


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<style>
	
</style>
<body style="background-image: url('https://wallpaper-house.com/data/out/10/wallpaper2you_399418.jpg'); background-size: cover; " >
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12" >
				<div class="text-center" class="">
					<div class="col-md-6 cover-login cover-side-login">
						<h1>CrashReport</h1>
						
					</div>
					<div class="col-md-6 cover-login">	
						<h1 style="">Log in</h1>
						<br>
						<?php if (isset($pesanSalah)): ?>
							<div id="alert">
								<ul><li><p><?php echo $pesanSalah ?></p></li></ul>
							</div>
						<?php endif ?>
						<form action="<?= base_url('C_Users/login')?>" method="post" class="login">
						<p>
							<input type="text" name="username" placeholder="Username" class="">						
						</p>
						<p>		
							<input type="password" name="password" placeholder="Password" class="">					
						
						</p>
						<p></p>
						<input type="submit" class="btn btn-success btn-login" style="width: 100%" value="Log in">
							</form>

					</div>
					
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>