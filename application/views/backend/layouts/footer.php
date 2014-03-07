<div id="topNav">
		 <ul>
		 	<li>
		 		<span style="color:#fff;">Welcome, </span><a href="#menuProfile" class="menu"><?php echo @$sessarray->admin_email; 

		 		 ?></a>
		 		
		 		<div id="menuProfile" class="menu-container menu-dropdown">
					<div class="menu-content">
						<ul class="">
							<li><a href="javascript:;">Edit Profile</a></li>	
							<li><a href="javascript:;">
								<?php if($sessarray->admin_type=="madmin"){
										echo "Add New Admin";
									} 
									else {
										echo "Remove This Account";
									}
									?>
							</a></li>
						</ul>
					</div>
				</div>
	 		</li>
		 	<li><a href="<?php echo site_url('admin_login/logout'); ?>">Logout</a></li>
		 </ul>
	</div> <!-- #topNav -->

	
</div> <!-- #wrapper -->


<div id="footer">
	Copyright &copy; 2014, MadeBy <a href="" style="color:#999999;">www.ktmeshop.com</a>

<script src="<?php echo base_url(); ?>assets/backend/javascripts/all.js"></script>

</body>
</html>