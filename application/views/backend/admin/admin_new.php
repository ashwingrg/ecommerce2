
<style>a{color:#fff;}</style>
<div id="content">		
	<div id="contentHeader">
		<h1>Admins CPanel</h1>
	</div> <!-- #contentHeader -->		
	<div class="container">	
		<div class="grid-14">												
				<div class="widget">		
					<div class="widget-header">
						<span class="icon-article"></span>
						<h3>
						<?php 
							if(@$adminById){
								echo "Edit Admin";
							}
							else {
								echo "New Admin";
							}
						 ?>
						</h3>
					</div> <!-- .widget-header -->	
					<div class="widget-content">	
						<form class="form uniformForm validateForm" method="post" action="<?php echo current_url(); ?>">		
							<!--Full Name-->
							<div class="field-group">
								<label for="First Name">Full Name:</label>
								<div class="field">
									<input type="text" name="fname" id="fname" value="<?php echo @$adminById->admin_firstname; ?>" class="validate[required]" placeholder="First Name" size="28">
									<input type="text" name="lname" id="lname" value="<?php echo @ $adminById->admin_lastname; ?>" class="validate[required]" placeholder="Last Name" size="28">
								</div>
							</div><!--.fieldgroup for Full Name-->
							<div class="field-group">
								<label for="Username">Username:</label>
								<div class="field">
									<input type="text" name="username" value="<?php echo @ $adminById->admin_username; ?>" id="username" size="28" class="validate[required]" placeholder="Username">	
								</div>
							</div> <!-- .field-group -->
							<!--email-->
							<div class="field-group">
								<label for="Email">Email:</label>
								<div class="field">
									<input type="email" name="email" id="email" value="<?php echo @ $adminById->admin_email; ?>" class="validate[required,custom[email]" size="30" placeholder="someone@gmail.com">
								</div>
							</div><!--email ends-->
							<!--password-->
							<div class="field-group">
								<label for=""><?php 
									if(@$adminById){
										echo "New Password:";
									}
									else{
										echo "Password:";
									}
								 ?></label>
								<div class="field">
									<input type="password" name="password1" id="password1" value="" placeholder="*******" class="
											<?php if(@$adminById){
													echo "validate[minSize[5]]";
												}
												else{
													echo "validate[required,minSize[5]]";
												} ?>
											">
									<label for="">* Minimum 5 characters</label>
								</div>
							</div><!--password -->
							<!--password again-->
							<div class="field-group">
								<label for="">
								<?php 
									if(@$adminById){
										echo "New Password Again:";
									}
									else{
										echo "Password Again:";
									}
								 ?>
								</label>
								<div class="field">
									<input type="password" name="password2" id="password2" value="" placeholder="*******" class="
												<?php 
													if(@$adminById){
														echo "validate[equals[password1]]";
													}
													else{
														echo "validate[required,equals[password1]]";
													}

												 ?>
											">
								</div>
							</div><!--password again-->
							<div class="field-group">		
								<label for="message">Admin Description:</label>
								<div class="field">
									<textarea name="description" id="description" rows="5" cols="30"><?php echo @$adminById->admin_description; ?></textarea>
								</div>
							</div>
							<?php if(@$adminById){ ?>	
							<input type="hidden" name="admin_type" id="admin_type" value="<?php echo @$adminById->admin_type; ?>">
							<?php } ?>
							<div class="actions">						
								<button type="submit" class="btn btn-success">Submit</button>
								<button type="button" onclick="window.location.href='<?php echo base_url();?>admin/adminAll'" class="btn btn-success">Cancel</button>
							</div> <!-- .actions -->	
						</form>	
					</div> <!-- .widget-content -->	
				</div>	
		</div> <!-- .grid -->	
	</div> <!-- .container -->	
</div> <!-- #content -->
<script>
	CKEDITOR.replace('description');
</script>