<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>LOGIN</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body>

<div class="container">
	<form action="<?php echo base_url(); ?>login/login_validation" method="POST">
	<table class="table">
		<tr><td><h1 class="text-center">Login</h1></td></tr>
		<tr><td><input type="text" name="username" class="form-control" placeholder="username">
		<span class="text-danger"><?php echo form_error('username'); ?></span>
		</td></tr>
		<tr><td><input type="password" name="password" class="form-control" placeholder="password">
		<span class="text-danger"><?php echo form_error('passsword'); ?></span>
		</td></tr>
		<tr><td align="center">
		 <?php echo $this->session->flashdata("error"); ?>
		<input type="submit" value="Submit" name="insert" class="btn btn-primary btn-md"> <a href="<?php echo base_url(); ?>home" class="btn btn-danger btn-md">Batal</a></td></tr>
	</table>
</form>

	
</body>
</html>