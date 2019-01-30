	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="index.php">
				<!-- <img src="assets/img/logo.png" alt="logo" /> -->
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="assets/img/menu-toggler.png" alt="" />
				</a>          
				<!-- END RESPONSIVE MENU TOGGLER -->            
				<!-- BEGIN TOP NAVIGATION MENU -->              
				<ul class="nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->
					<li><a href="<?php echo "http://".$_SERVER['HTTP_HOST']; ?>" target="_blank">Main Site</a></li>   
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
 
						<span class="username"><?php echo $_SESSION['username'];?></span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
						<!---
							<li><a href="inbox.php"><i class="icon-envelope"></i> My Inbox <span class="badge badge-important">3</span></a></li>
						-->	
							<li class="divider"></li>
							<li><a href="javascript:;" id="trigger_fullscreen"><i class="icon-move"></i> Full Screen</a></li>
							<li><a href="extra_lock.php"><i class="icon-lock"></i> Lock Screen</a></li>
							<li><a href="logout.php?action='logout'"><i class="icon-key"></i> Log Out</a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU --> 
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->