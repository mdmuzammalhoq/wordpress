<?php  
	include('session.php'); 
	include('connect.php'); 
	//include('functions.php'); 
	error_reporting(0);
 ?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Inner Wheel Bangladesh </title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
	<!-- BEGIN HEADER -->   
	<?php include('header.php'); ?>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar nav-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->        
			<?php include('sidebar.php'); ?>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->  
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>portlet Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here will be a configuration form</p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->   
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN STYLE CUSTOMIZER -->

						<!-- END BEGIN STYLE CUSTOMIZER -->  
						<h3 class="page-title">
							Inner Wheel Bangladesh
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.php">Home</a> 
								<span class="icon-angle-right"></span>
							</li>
							<li>
								<a href="#">
								<?php 
									if($_REQUEST['menu'] == 1 || $_REQUEST['menu'] == 2 || $_REQUEST['menu'] == 3 || $_REQUEST['menu'] == 4 || $_REQUEST['menu'] == 5)
										{ echo $_REQUEST['menu_name']; }?></a>
								
							</li>
							<!-- <li><a href="#">Content Editor</a></li> -->
						</ul>
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN SAMPLE FORM PORTLET-->   
						<div class="portlet box purple tabbable">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-reorder"></i>
									<span class="hidden-480">Content Editor</span>
								</div>
							</div>
							<div class="portlet-body form">
								<div class="tabbable portlet-tabs">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#portlet_tab1" data-toggle="tab">Default</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="portlet_tab1">
 
											<div class="msg" style="color:blue; font-weight:bold; font-size:14px;">
												<?php if (isset($_REQUEST['confirm'])) {echo $_REQUEST['confirm'];} ?>
											</div>
											<!-- BEGIN FORM-->
											<form action="" class="form-horizontal" method="post" >	
												<div class="control-group">
													<label class="control-label">Title</label>
													<div class="controls">
														<input type="text" name="content_title" class="span6 m-wrap" value="<?php echo $title; ?>" />

													</div>
												</div>
												<div class="control-group">
													<div class="controls">
														<div class="row">
															<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
															<textarea class="span12 ckeditor m-wrap"  name="editor1" rows="10">
																<?php echo $text; ?>
															</textarea>
															<p style="color:red; font-size:14px;">Image width:<b>814px </b> and height: <b>285px</b></p>
														</div>
														</div>
													</div>
												</div>		
												<div class="form-actions">
													<button type="submit" name="submit" class="btn purple"><i class="icon-ok"></i> Save</button>
													<input type="hidden" value="1" name="submitted">

													
												</div>
											
											</form>
											<!-- END FORM-->  
										</div>

									</div>
								</div>
							</div>
						</div>
						<!-- END SAMPLE FORM PORTLET-->
					</div>
				</div>
				<!-- END PAGE CONTENT-->         
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->  
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer">
		<div class="footer-inner">
			2015 &copy; Inner Wheel Bangladesh.
		</div>
		<div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
		</div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   <script src="assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.min.js"></script>
	<script src="assets/plugins/respond.min.js"></script>  
	<![endif]-->   
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<script src="assets/scripts/app.js"></script>
	<!-- END CORE PLUGINS -->
	   
	<script>
		jQuery(document).ready(function() {   
		   // initiate layout and plugins
		   App.init();
		});
	</script>
	<script src="assets/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>

	<!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>