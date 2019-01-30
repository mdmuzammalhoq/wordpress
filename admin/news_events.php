<?php  require_once('session.php'); ?>
<?php  require_once('connect.php'); ?>
<?php
  error_reporting(0);

  if(isset($_REQUEST['delete'])) {
        
      $id=$_GET['delete'];
      $del_query=mysql_query("select * from news_events where fld_id='$id'");
      $del_row = mysql_fetch_array($del_query);
      mysql_query("delete from news_events where fld_id='$id'");  
  }

   if($_GET['edit'] == "yes"){

      $sql1 = "SELECT * FROM news_events where fld_id =' ".$_GET['id']."' limit 1";
      $result1 = mysql_query($sql1);
      $test = mysql_fetch_array($result1);      
   } 
?>
<?php
        if(isset($_REQUEST['submitted']) && $_GET['edit'] == "yes"){

			$id= $_GET['id'];
			$yes = $_GET['edit'];
			
			$title = $_POST['title'];
			$date_picker = $_POST['date_picker'];
			$details_text = $_POST['details_text'];	
            $sql = mysql_query("update news_events set fld_title = '".$title. "', Event_date = '$date_picker', fld_news_event = '".$details_text. "' where fld_id = '".$_GET['id']. "'");
	         ($sql) or die(mysql_error());
	           if($sql){
	        ?>   	
			<script type="text/javascript">
				window.location ="news_events.php?id=<?php echo $id;?>&edit=<?php echo $yes;?>&msg=Updated Successfully!";
			</script>				
		<?php }
        }
?>								
<?php

    if(isset($_REQUEST['submitt'])){
		$title = $_POST['title'];
		$details_text = $_POST['details_text'];	
		$date_picker = $_POST['date_picker'];
		$sq =mysql_query("select * from news_events where fld_title = '".$title."' and fld_news_event='".$details_text."'");
		$count = mysql_num_rows($sq);
		if($count == 0){
			$sql = mysql_query("insert into news_events (fld_title,	Event_date, fld_news_event) values('$title', '$date_picker', '$details_text');");
			 if($sql){
				//echo "<strong style='color:green;'> Data Inserted!</strong>";
				header("location:news_events.php?msg=Data Inserted!");
			}						
		} else {
			//echo "<strong style='color:green;'> Data Already Inserted!</strong>";
			header("location:news_events.php?msg=Data Already Exists!");
		}

	}     
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
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/gritter/css/jquery.gritter.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/chosen-bootstrap/chosen/chosen.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_metro.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/clockface/css/clockface.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datepicker/css/datepicker.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-timepicker/compiled/timepicker.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-colorpicker/css/colorpicker.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
	<link rel="stylesheet" type="text/css" href="assets/plugins/jquery-multi-select/css/multi-select-metro.css" />
	<link href="assets/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/bootstrap-switch/static/stylesheets/bootstrap-switch-metro.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="assets/plugins/jquery-tags-input/jquery.tagsinput.css" />
	<!-- END PAGE LEVEL STYLES -->
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
						<h3 class="page-title">Inner Wheel Bangladesh</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html">Home</a> 
								<span class="icon-angle-right"></span>
							</li>
							<li>
								<a href="#">News & Events</a>							
							</li>							
						</ul>
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<h5 style="color:green;font-weight:700;"><center><?php if(isset($_REQUEST['msg'])){echo $_REQUEST['msg'];} ?></center></h5>
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN SAMPLE FORM PORTLET-->   
						<div class="portlet box green">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>News and Events</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form class="form-horizontal" method="post" enctype="multipart/form-data">              
									<div class="control-group">
										<label class="control-label">Title</label>
										<div class="controls">
											<input type="text" name="title" required class="span6 m-wrap popovers" data-trigger="hover" data-content="Type Name" value="<?php echo $test['fld_title']; ?>" />
										</div>
									</div>	
									<div class="control-group">
										<label class="control-label">Event Date</label>
										<div class="controls">
											<div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
												<input type="text" class="form-control" name="date_picker"  value="<?php echo $test['Event_date']; ?>" readonly>
												<span class="input-group-btn">
													<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
											<span class="help-block">
												 Select date
											</span>
										</div>
									</div>																						
									<div class="control-group">
										<div class="controls">
											<div class="row">
												<div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">											
													<textarea class="span12 ckeditor m-wrap"  name="details_text" rows="5"><?php echo $test['fld_news_event']; ?></textarea>
												</div>
											</div>	
										</div>
									</div>
									<div class="form-actions">
									 <?php if(empty($_GET['edit']) == "yes"){ ?>  
										<button type="submit" name="submit" class="btn green">Create</button>
										<input type="hidden" name="submitt" value="1">

									<?php } if($_GET['edit'] == "yes"){ ?>	
										<button type="submit" name="submit" class="btn green">Update</button>
										<input type="hidden" name="submitted" value="1">									
									<?php } ?>	
										<button type="reset" value="" class="btn">Cancel</button>     
									</div>
								</form>

								<!-- END FORM-->  
							</div>
						</div>
						<!-- END SAMPLE FORM PORTLET-->
					</div>
				</div>

				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box green">
							<div class="portlet-title">
								<div class="caption"><i class="icon-edit"></i>Details</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body">
								<div class="table-toolbar">
									<div class="btn-group">
										<a href="news_events.php"><button id="sample_editable_1_new" class="btn green">
										Add New <i class="icon-plus"></i>
										</button></a>
									</div>
									<div class="btn-group pull-right">
										<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
										</button>
										<ul class="dropdown-menu pull-right">
											<li><a href="#">Print</a></li>
											<li><a href="#">Save as PDF</a></li>
											<li><a href="#">Export to Excel</a></li>
										</ul>
									</div>
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
									<thead>
										<tr>

											<th>Title</th>
											<th>Details</th>
											<th>Edit</th>											
											<th>Delete</th>
										</tr>
									</thead>
							<?php 
			                       $query = mysql_query("select * from news_events");
			                       while($user = mysql_fetch_assoc($query)){
                           ?>
									<tbody>
										<tr >
											<td><?php echo $user['fld_title']; ?></td>											
											<td><?php echo $user['fld_news_event']; ?></td>
											<td><a class="edit" href ='news_events.php?id=<?php echo "$user[fld_id]";?>&edit=yes' title='Edit'>Edit</td>
											<td><a class="delete" href="?delete=<?php echo "$user[fld_id]";?>">Delete</a></td>
										</tr>

									</tbody> 
								<?php } ?>
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->
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
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="assets/plugins/ckeditor/ckeditor.js"></script>  
	<script type="text/javascript" src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
	<script type="text/javascript" src="assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
	<script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
	<script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
	<script type="text/javascript" src="assets/plugins/clockface/js/clockface.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script> 
	<script type="text/javascript" src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
	<script type="text/javascript" src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   
	<script type="text/javascript" src="assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>   
	<script src="assets/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript" ></script>
	<script src="assets/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript" ></script> 
	<script src="assets/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js" type="text/javascript" ></script>
	<script src="assets/plugins/bootstrap-switch/static/js/bootstrap-switch.js" type="text/javascript" ></script>
	<script src="assets/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript" ></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="assets/scripts/app.js"></script>
	<script src="assets/scripts/form-components.js"></script>     
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
		jQuery(document).ready(function() {       
		   // initiate layout and plugins
		   App.init();
		   FormComponents.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>