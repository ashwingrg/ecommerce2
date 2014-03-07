

<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

	<title>Canvas Admin - Login</title>

	<meta charset="utf-8" />
	<meta name="description" content="" />
	<meta name="author" content="" />		
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheets/reset.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheets/text.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheets/buttons.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheets/theme-default.css" type="text/css" media="screen" title="no title" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/stylesheets/login.css" type="text/css" media="screen" title="no title" />
</head>

<body>
<?php 
	if($this->session->flashdata('logoutmsg')){
		?>
			<div class="notify" style="background-color:#d5aa14; width:400px; margin-left:408px; border-radius:3px 0px 3px 3px;">
				<pre style="padding:6px; font-size:10px;">You have successfully terminated your session...</pre>
			</div>
		<?php
	}
 ?>

<div id="login">
	<h1>Dashboard</h1>
	<div id="login_panel">

		<form action="<?php echo base_url(); ?>admin/login" method="post" accept-charset="utf-8">		
			<div class="login_fields" style="display:hidden;">
			<?php 
				if($this->session->flashdata('inv')){
					?>
					<div class="notify">
					<span class="field">
					<label for="invlogin" style="color:red; font-weight:bold; font-size:13px;"><?php echo $this->session->flashdata('inv'); ?></label>
					</span>
					</div><!--.notify-->
					<?php
				}
				
			 ?>

				<div class="field">
					<label for="email">Username or Email</label>
					<input type="text" name="useroremail" value="" id="useroremail" tabindex="1" placeholder="email@example.com" />		
				</div>
				
				<div class="field">
					<label for="password">Password <small><a href="javascript:;">Forgot Password?</a></small></label>
					<input type="password" name="password" value="" id="password" tabindex="2" placeholder="password" />			
				</div>
			</div> <!-- .login_fields -->
			
			<div class="login_actions">
				<button type="submit" class="btn btn-primary" tabindex="3">Login</button>
				<span class="field" style="float:right; margin-top:8px;">Powered by <a href="<?php echo base_url(); ?>home" target="_blank">www.ktmeshop.com</a></span>
			</div>
		</form>
	</div> <!-- #login_panel -->		
</div> <!-- #login -->

<script src="<?php echo base_url(); ?>assets/backend/javascripts/all.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/js/custom.js"></script>



</body>
</html>