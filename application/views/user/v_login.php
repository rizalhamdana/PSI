<!DOCTYPE html>
<html>
<head>
	<?php //$this->load->view('user/header'); ?>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<style>
	.cover-login{
		margin-top: 100px; 
		background-color:white; 
		padding: 100px 30px;
		
	}
	.btn-login{
		background-color: #4286f4;
		border-color: #4286f4; 
		border-radius: 0;
	}
	.btn-login:hover{
		background-color: #324159;
		border-color: #324159; 

	}
	.cover-side-login{
		padding: 50px 50px; 
		margin: 0 0; 
		background-color:rgba(66,134,244,1);
		color: white;
	}
	form.login input[type="text"], form.login input[type="password"]
{
    width: 100%;
    margin: 0;
    padding: 5px 10px;
    background: 0;
    border: 0;
    border-bottom: 1px solid #d5d9e0;
    outline: 0;
    font-style:;
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 1px;
    margin-bottom: 5px;
    outline: 0;
}
</style>
<body style="background-image: url('https://wallpaper-house.com/data/out/10/wallpaper2you_399418.jpg'); background-size: cover; " >
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12" >
				<div class="text-center" class="union-cover">
					<div class="col-md-6 cover-login" style="padding: 0 0; ">
						<div class="cover-side-login" style="height: 410px;">
							<h1>CrashReport</h1>
						</div>
						
					</div>
					<div class="col-md-6  cover-login">	
						<h1 style="">Log in</h1>
						<br>
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