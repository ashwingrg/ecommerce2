<style>
a:hover{text-decoration: none;}
a { color: #fff;}
</style>
<div id="content">	
	<div id="contentHeader">
		<h1>Admins CPanel</h1>
	</div> <!-- #contentHeader -->	
	<div class="container">	
		<div class="grid-24">	
		<?php 
		if($this->session->flashdata('adminadded')){
		?>
			<div class="notify notify-success" style="width: 50%;">		
				<a href="javascript:;" class="close">×</a>			
				<h3>Success Notify</h3>		
				<p><?php echo $this->session->flashdata('adminadded')  ?></p>
			</div>
		<?php
		}
		else if ($this->session->flashdata('admindeleted')){
			?>
			<div class="notify notify-error" style="width: 50%;">		
				<a href="javascript:;" class="close">×</a>			
				<h3>Success Notify</h3>		
				<p><?php echo $this->session->flashdata('admindeleted')  ?></p>
			</div>
		<?php
		}
		?>						
		<div class="widget widget-table">	
			<div class="widget-header">
				<span class="icon-list"></span>
				<h3 class="icon chart">List All Admins</h3>		
			</div>	
			<div class="widget-content">			
				<table class="table table-bordered table-striped data-table">
					<thead>
						<tr>
							<th>Admin Username</th>
							<th>Admin Full Name</th>
							<th>Admin Email</th>
							<th width="14%">Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($allAdmins as $admin) { ?>
						<tr class="gradeA">
							<td><?php echo $admin->admin_username; ?></td>
							<td><?php echo $admin->admin_firstname." ".$admin->admin_lastname; ?></td>
							<td><?php echo $admin->admin_email; ?></td>
							<td >
								<button class="btn btn-primary" onclick="window.location.href='<?php echo base_url();?>admin/editAdmin/<?php echo $admin->admin_id; ?>'"><span class=""></span><a>Edit</a></button>
								<button class="btn btn-primary" onclick="window.location.href='<?php echo site_url('admin/admin/deleteAdmin'); ?><?php echo "/".$admin->admin_id; ?>'"><span class=""></span><a>Delete</a></button>
							</td>
						</tr>	
						<?php } ?> 													
					</tbody>
				<?php  ?>
				</table>	
			</div> <!-- .widget-content -->	
		</div> <!-- .widget -->	
		</div> <!-- .grid -->
	</div> <!-- .container -->
</div> <!-- #content -->
	