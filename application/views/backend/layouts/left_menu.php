<?php $urcheck = $this->uri->segment(2); ?>
<div id="sidebar">		
		
		<ul id="mainNav">			
			<li id="navDashboard" class="nav 
			<?php 
				if($urcheck=="dashboard"){
					echo "active";
				}
			 ?>
			 ">
				<span class="icon-home"></span>
				<a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a>				
			</li>
			<!--category-->
			<li id="navPages" class="nav">
				<span class="icon-document-alt-stroke"></span>
				<a href="">Category</a>				
				<ul class="subNav">
					<li><a href="<?php echo base_url();?>admin/category">List Category</a></li>
					<li><a href="#">Create New Category</a></li>
				</ul>							
			</li><!--category ends here-->
			<!--subcategory-->
			<li id="navPages" class="nav">
				<span class="icon-document-alt-stroke"></span>
				<a href="">Sub Category</a>				
				<ul class="subNav">
					<li><a href="#">List Sub Category</a></li>
					<li><a href="#">Create New Sub Category</a></li>
				</ul>							
			</li><!--subcategory ends here-->
			<!--products-->
			<li id="navPages" class="nav">
				<span class="icon-document-alt-stroke"></span>
				<a href="">Products</a>				
				<ul class="subNav">
					<li><a href="#">List Products</a></li>
					<li><a href="#">Create New Product</a></li>
				</ul>							
			</li><!--products ends here-->
			<?php 
				if(@$sessarray->admin_type=="madmin"){ ?>
			<!--admins-->
			<li id="navPages" class="nav
			<?php 
				if($urcheck=="adminAll" || $urcheck=="newAdmin" || $urcheck=="editAdmin"){
					echo "active";
				}
			 ?>
			">
				<span class="icon-document-alt-stroke"></span>
				<a href="">Admins</a>				
				<ul class="subNav">
					<li><a href="<?php echo base_url(); ?>admin/adminAll">List All Admins</a></li>
					<li><a href="<?php echo base_url(); ?>admin/newAdmin">Create New Admin</a></li>
					<li><a href="<?php echo base_url()?>admin/editAdmin/<?php echo $sessarray->admin_id; ?>">Edit Current Admin</a></li>
				</ul>							
			</li><!--admins ends here-->
			<?php
				}
			 ?>
			
			<li id="navType" class="nav">
				<span class="icon-info"></span>
				<a href="./typography.html">Typography</a>	
			</li>
			
			
		</ul>
				
	</div> <!-- #sidebar -->