<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--for responsive-->
    <title>KTM E-SHOP.com</title>
  <!--   <script src="js/respond.js"></script> -->
    <link href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/frontend/css/custom.css">
</head>
<body>
	<div class="container" style="background-color:#f3f3f3;">
		<!--Header-->
		<header class="row" style="margin-left:2px; margin-right:2px;">
			<!--header first row-->
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-5">
					<img src="<?php echo base_url(); ?>assets/frontend/img/logo.png" alt="ktmesho" class="img-responsive">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-7">
					<ul class="tool list-inline pull-right " style="margin-top: 2.2em;">
						<li><a href="#" data-toggle="modal" data-target="#signupModal" data-placement="left" data-original-title="Register to ktmeshop.com">Register</a></li>
						<!-- Modal for register/signup -->
						<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							    <div class="modal-content">
							    	<div class="modal-header">
							    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							        	<h4 class="modal-title" id="signupModalLabel" style="border-left:3px solid #01549a; padding-left:8px; color:#428bca;">Welcome to sign up page</h4>
							      	</div>
							    	<div class="modal-body">
							        	<article>
							        		<form action="#" method="#" id="signupForm" class="form-horizontal">
							        			<!--Full Name-->
							        			<div class="form-group">
										            <label for="Name" class="control-label col-xs-2" style="margin-left:-20px; font-weight:normal;">Name:</label>
										            <div class="col-xs-4" style="padding:0px 5px 0 0;">
										                <input type="text" class="form-control" id="fname" placeholder="First Name" style="border-radius:0px;">
										            </div>
										            <div class="col-xs-3" style="padding:0px 5px 0 0;">
										                <input type="text" class="form-control" id="mname" placeholder="Middle Name" style="border-radius:0px;">
										            </div>
										            <div class="col-xs-3" style="padding:0px 5px 0 0;">
										                <input type="text" class="form-control" id="lname" placeholder="Last Name" style="border-radius:0px;">
										            </div>
										        </div><!--Full Name ends here-->
										        <!--Email-->
										        <div class="form-group">
										            <label for="Email" class="control-label col-xs-2" style="margin-left:-20px; font-weight:normal;">Email:</label>
										            <div class="col-xs-6" style="padding:0px 5px 0 0;">
										                <input type="email" class="form-control" id="email" placeholder="Email" style="border-radius:0px;">
										            </div>
										        </div><!--Email ends here-->
										        <!--Phone-->
										        <div class="form-group">
										            <label for="Phone" class="control-label col-xs-2" style="margin-left:-20px; margin-top:-10px; font-weight:normal;">Contact No.:</label>
										            <div class="col-xs-5" style="padding:0px 5px 0 0;">
										                <input type="phn" class="form-control" id="phone" placeholder="Contact no." style="border-radius:0px;">
										            </div>
										        </div><!--Phone ends here-->
										        <!--Address-->
										        <div class="form-group">
										            <label for="Address" class="control-label col-xs-2" style="margin-left:-20px; font-weight:normal;">Address:</label>
										            <div class="col-xs-5" style="padding:0px 5px 0 0;">
										                <input type="text" class="form-control" id="paddress" placeholder="Permanent Address" style="border-radius:0px;">
										            </div>
										            <div class="col-xs-5" style="padding:0px 5px 0 0;">
										                <input type="text" class="form-control" id="saddress" placeholder="Shipping Address" style="border-radius:0px;">
										            </div>
										        </div><!--Address ends here-->
										        <!--Extraa Info-->
										        <div class="form-group">
										            <label for="Extra Info" class="control-label col-xs-2" style="margin-left:-20px; font-weight:normal;">Extra Info:</label>
										            <div class="col-xs-2" style="padding:0px 5px 0 0;">
										                <input type="text" class="form-control" id="country" placeholder="Country" style="border-radius:0px;">
										            </div>
										            <div class="col-xs-3" style="padding:0px 5px 0 0;">
										                <input type="text" class="form-control" id="city" placeholder="City" style="border-radius:0px;">
										            </div>
										            <div class="col-xs-3" style="padding:0px 5px 0 0;">
										                <input type="text" class="form-control" id="state" placeholder="State" style="border-radius:0px;">
										            </div>
										            <div class="col-xs-2" style="padding:0px 5px 0 0;">
										                <input type="text" class="form-control" id="zip" placeholder="ZIP Code" style="border-radius:0px;">
										            </div>
										        </div><!--Extraa Info ends here-->
										        <!--Address Info-->
										        <div class="form-group">
										            <label for="Phone" class="control-label col-xs-2" style="margin-left:-20px; margin-top:-10px; font-weight:normal;">Address Info:</label>
										            <div class="col-xs-5" style="padding:0px 5px 0 0;">
										                <input type="text" class="form-control" id="addressinfo" placeholder="Address Info." style="border-radius:0px;">
										            </div>
										        </div><!--Address Info ends here-->
										        <!--Info Type-->
										        <div class="form-group">
										            <label for="Phone" class="control-label col-xs-2" style="margin-left:-20px; font-weight:normal;">Info Type:</label>
										            <div class="col-xs-5" style="padding:0px 5px 0 0;">
										                <input type="text" class="form-control" id="userinfotype" placeholder="User Info Type" style="border-radius:0px;">
										            </div>
										        </div><!--Info Type ends here-->
										        <!--Password-->
										        <div class="form-group">
										            <label for="Phone" class="control-label col-xs-2" style="margin-left:-20px; font-weight:normal;">Password:</label>
										            <div class="col-xs-5" style="padding:0px 5px 0 0;">
										                <input type="password" class="form-control" id="password" placeholder="*********" style="border-radius:0px;">
										            </div>
										        </div><!--Password ends here-->
										        <label for="" style="margin-top:5px;">Already a member? <a href="" data-toggle="modal" data-dismiss="modal" data-target="#loginModal">Login</a></label>
										        <button type="submit" class="btn btn-success pull-right" style=" border-radius:0px; margin-top:5px;" >SIGN UP</button>
							        		</form>
							        	</article>
							      	</div>
							    </div>
						  	</div>
						</div><!--signup model ends here-->
						<li><a href="#" data-toggle="modal" data-original-title="Member Login" data-target="#loginModal">Login</a></li>
						<!-- Modal for login -->
						<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							    <div class="modal-content">
							    	<div class="modal-header">
							    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							        	<h4 class="modal-title" id="loginModalLabel" style="border-left:3px solid #01549a; padding-left:8px; color:#01549a;">Sign in</h4>
							      	</div>
							    	<div class="modal-body">
							        	<article>
							        		<form action="#" method="#" id="loginForm">
							        			<div class="form-group">
							        				<label for="Username" style="font-weight:normal;">Username</label>
							        				<input type="text" class="form-control" style="border-radius:0px; border-left:2px solid #bfbfbf;" name="username" id="username">
							        			</div>
							        			<div class="form-group">
							        				<label for="Password" style="font-weight:normal;">Password</label>
							        				<input type="password" class="form-control" style="border-radius:0px; border-left:2px solid #bfbfbf;" name="password" id="password">
							        			</div>
							        			<div class="form-group">
							        				<input type="checkbox" style="margin-top:3px;">
							        				<label for="remember" style="font-weight:normal;">&nbsp; Remember me</label>
							        				<label for="notmember">Not a member yet?<a href="" data-toggle="modal" data-target="#signupModal" data-dismiss="modal">&nbsp;Sign up</a></label>
							        			</div>

												<button type="submit" class="btn btn-success pull-right" style="margin-top:-40px; border-radius:0px;" >SIGN IN</button>
							        		</form>
							        	</article>
							      	</div>
							    </div>
						  	</div>
						</div><!--login model ends here-->
						<li><a href="#" data-toggle="tooltip" data-original-title="Checkout">Checkout</a></li>
					</ul>
				</div>
			</div><!--header first row ends here-->
			<!--Header second row for navigation menu-->
			<div class="row">
				<div class="col-lg-12 col-md-12">	
					<!-- Navigation bar -->
				   	<div class="navbar navbar-default" role="navigation" style="margin-left: -3px;">
				       	<div class="navbar-header">
				        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					            <span class="sr-only">Toggle navigation</span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
				        	</button>
				        </div>
				        <div class="navbar-collapse collapse">
				        	<ul class="nav navbar-nav">
					            <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
					            <li><a href="#">About Us</a></li>
					            <li class="dropdown">
					            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
					            	<ul class="dropdown-menu">
						                <li><a href="#">Action</a></li>
						                <li><a href="#">Another action</a></li>
						                <li><a href="#">Something else here</a></li>
						                <li class="divider"></li>
						                <li class="dropdown-header">Nav header</li>
						                <li><a href="#">Separated link</a></li>
						                <li><a href="#">One more separated link</a></li>
				              		</ul>
				            	</li>
				            	<li class="dropdown">
					            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
					            	<ul class="dropdown-menu">
						                <li><a href="#">Latest Products</a></li>
						                <li><a href="#">Popular Products</a></li>
						                <li><a href="#">Special Products</a></li>
				              		</ul>
				            	</li>
					            <li><a href="#">Blog</a></li>
					            <li class="dropdown">
					            <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
					            	<ul class="dropdown-menu">
						                <li><a href="#">Action</a></li>
						                <li><a href="#">Another action</a></li>
						                <li><a href="#">Something else here</a></li>
				              		</ul>
				            	</li>
				            	<li><a href="#">Contact Us</a></li>
				          	</ul>
				          	<!--Search-->
				        	<form class="navbar-form navbar-left pull-right hidden-sm hidden-xs" role="search">
					    		<div class="form-group">
					        		<input type="text" class="form-control" placeholder="Search here..." >
					      		</div>
					      		<button type="submit button" class="btn btn-primary" ><span class="glyphicon glyphicon-search"></span> Search</button>
					    	</form><!--Search ends here-->
				      	</div><!--nav-collapse -->
				    </div><!--Navigation bar ends here-->
				</div>
    		</div><!--Header second row ends here-->
		</header><!--Header ends here-->