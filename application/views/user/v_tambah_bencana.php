<?php $this->load->helper('html'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<form action="<?= base_url('C_Bencana/tambahBencana')?>" method="post">
		<input type="text" name="Bencana" value="nama bencana">
		<input type="text" name="Wilayah" value="wilayah bencana">
		<input type="date" name="Date">
		<input type="submit" value="Submit">
	</form>
</body>
</html>