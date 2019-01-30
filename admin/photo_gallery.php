<?php include('session.php');
 	include('connect.php');
	error_reporting(0);
    if($_GET['edit']=="yes"){
        $sqll="select * from photo_gallery where fld_id='".$_GET['id']."' limit 1";
        $resultt=mysql_query($sqll);
      	$test = mysql_fetch_array($resultt);
        $file = $test['fld_img'];
    }
	if(isset($_REQUEST['delete'])) {   
	    $id=$_GET['delete'];
	    $del_query=mysql_query("select * from photo_gallery where fld_id='$id'");
	    $del_row = mysql_fetch_array($del_query);
	    mysql_query("delete from photo_gallery where fld_id='$id'");
	    if(file_exists("../img_201516//$del_row[fld_img]")){
	    unlink("../img_201516//$del_row[fld_img]");
	    header("location: photo_gallery.php?confirm=Image Deleted");
	    }
	}
?>
<?php
	if(isset($_REQUEST['submitt']) && isset($_POST['Upload'])){
		$texttitle = $_POST['photo_title'];
		$textdetails = $_POST['photo_link'];
		$file = $_FILES['file']['name'];

        $path = "../img_201516/".$file;
        $allowedExts = array("jpg", "jpeg", "gif", "png");
        $extension = end(explode(".", $_FILES["file"]["name"]));
        if((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/png")) && ($_FILES["file"]["size"] < 5000000) && in_array($extension, $allowedExts))
        {
        if ($_FILES["file"]["error"] > 0){
          echo "Error: " . $_FILES["file"]["error"] . "<br />";
        } else { move_uploaded_file($_FILES['file']['tmp_name'], $path); } } else  { echo "Invalid file";  }

		$insert=mysql_query("insert into photo_gallery (fld_title,fld_desc,fld_img) values ('$texttitle','$textdetails','$file')") or die(mysql_error());		  		
		if($insert)
		{
    		header("location:photo_gallery.php?msg=Image Uploaded Successfully!");
    	}
	}  
?>
<?php
		if(isset($_REQUEST['submitted']) && $_GET['edit'] == "yes"){
			$id= $_GET['id'];
			$yes = $_GET['edit'];
			$texttitle = $_POST['photo_title'];
			$textdetails = $_POST['photo_link'];

			$file2 = $_FILES['file']['name'];
			if(!empty($file2)){
				$file = $_FILES['file']['name'];
			
		        $path = "../img_201516/".$file;
		        $allowedExts = array("jpg", "jpeg", "gif", "png");
		        $extension = end(explode(".", $_FILES["file"]["name"]));
		        if((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/png")) && ($_FILES["file"]["size"] < 5000000) && in_array($extension, $allowedExts))
		        {
		        if ($_FILES["file"]["error"] > 0){
		          echo "Error: " . $_FILES["file"]["error"] . "<br />";
		        } else { move_uploaded_file($_FILES['file']['tmp_name'], $path); } } else  { echo "Invalid file";  }	
		  	} else {
			   	$sqll="select * from photo_gallery where fld_id='".$_GET['id']."' limit 1";
	            $resultt=mysql_query($sqll);
	          	$test = mysql_fetch_array($resultt);
	            $file = $test['fld_img'];
		  		$file = $file;
		  	}
			$sql = mysql_query("update photo_gallery set fld_title = '$texttitle', fld_desc = '$textdetails', fld_img = '$file' where fld_id = '$id'")or die(mysql_error());
?>
<script type="text/javascript">
 window.location ="photo_gallery.php?id=<?php echo $id;?>&edit=<?php echo $yes;?>&confirm=Image Updated!";
</script>			
<?php } ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Inner Wheel Bangladesh</title>
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
	<link href="assets/plugins/dropzone/css/dropzone.css" rel="stylesheet"/>
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
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
							Inner Wheel Bangladesh
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.php">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Photo Gallery</a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<div class="msg" style="color:green; font-weight:bold; font-size:16px;text-align:center;">  
					<?php if(isset($_REQUEST['confirm'])){ echo $_REQUEST['confirm']; }?>
				</div>
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">          
					<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN SAMPLE FORM PORTLET-->   
							<div class="portlet box blue">
								<div class="portlet-title">
									<div class="caption"><i class="icon-reorder"></i>Image Uploader
										<?php if($_GET['edit'] == "yes"){ ?>	
											<a href="photo_gallery.php">
											<button id="sample_editable_1_new" class="btn yellow" style="margin-left:470px;">
												Add New Image<i class="icon-plus"></i>
											</button>
											</a>
										 <?php } ?>	
									</div>
									<div class="tools">
										<a href="javascript:;" class="collapse"></a>
										<a href="#portlet-config" data-toggle="modal" class="config"></a>
										<a href="javascript:;" class="reload"></a>
										<a href="javascript:;" class="remove"></a>
									</div>
								</div>
								<div class="portlet-body form">	
                                   <form role="form"  method="post" enctype="multipart/form-data" class="form-horizontal">
										<div class="control-group">
											<label class="control-label">Title</label>
											<div class="controls">
												<input type="text" class="span6 m-wrap" name="photo_title" value="<?php echo $test['fld_title']; ?>" placeholder="Photo Title" />	
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">Description</label>
											<div class="controls">
												<textarea name="photo_link" class="span6 m-wrap"b rows="5"><?php echo $test['fld_desc']; ?></textarea>
											</div>
										</div><?php if($_GET['edit'] == "yes"){ ?>
										<div class="control-group">
											<div class="controls" style="height:130px; width:100px; padding:2px;">
												<img src="../img_201516/<?php echo $file; ?>" width="100px" height="80px"  border="1px solid #4B8DF8" alt="No Image Available">
											</div>
										</div><?php } ?>	
                                    	<div class="control-group">
											<label class="control-label">Image Upload</label>
											<div class="controls">
												<input type="file" class="default"  name="file" value="<?php echo $file; ?>" />
											</div>
										</div>
										<div class="form-actions">
											 <?php if(empty($_GET['edit']) == "yes"){ ?>  
												<button type="submit"  name="Upload" class="btn blue">Upload</button>
												<input type="hidden" name="submitt" value="1">
												<button type="reset" value="" class="btn">Cancel</button>

											<?php } if($_GET['edit'] == "yes"){ ?>	
												<button type="submit"  name="submit" class="btn blue">Upload</button>
												<input type="hidden" name="submitted" value="1">									
											<?php } ?>		     	    
										</div>
                                    </form>
	                            </div> 
	                        </div>
	                    </div>
	                </div>                   
                      
				<div class="row-fluid">
					<div class="span12">               
							<div class="portlet box blue">
									<div class="portlet-title">
										<div class="caption"><i class="icon-picture"></i>Images Description

										</div>

										<div class="tools">
											<a href="javascript:;" class="collapse"></a>
											<a href="#portlet-config" data-toggle="modal" class="config"></a>
											<a href="javascript:;" class="reload"></a>
											<a href="javascript:;" class="remove"></a>
										</div>
									</div>


								
								<div class="portlet-body flip-scroll">
									<table class="table-bordered table-striped table-condensed flip-content">
										<thead class="flip-content">
												<tr>
													<th>Title</th>
													<th>Description</th>
													<th>Logo</th>
													<th class="hidden-480">Edit</th>
													<th>Delete</th>
												</tr>
											</thead>
											<tbody>
	                       <?php
	                       
                            	$listresult=mysql_query("select * from photo_gallery order by fld_id desc");
                            	while($row=mysql_fetch_array($listresult)) {
	                            
	                        ?>										
												<tr>
													<td><?php echo $row['fld_title']; ?></td>
													<td><?php echo $row['fld_desc']; ?></td>
													<td>
													<?php if($row['fld_img']){ ?>
														<img src="../img_201516/<?php echo "$row[fld_img]";?>" width="35" height="35" >
													<?php } else { ?>
														 <img src="../img_201516/no_image.jpg" width="35" height="35" >
													<?php } ?>	 
													</td>
													<td><a href ='photo_gallery.php?id=<?php echo "$row[fld_id]";?>&edit=yes' title='Edit'>Edit</a></td>
													<td><a href="?delete=<?php echo "$row[fld_id]";?>" class="btn mini red"><i class="icon-trash"></i> Delete</a></td>
												</tr>
	 						<?php } ?>
											</tbody>
										</table>
									</div>
								</div>

					</div>
				</div>				
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
	<script src="assets/plugins/dropzone/dropzone.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="assets/scripts/app.js"></script>
	<script>
		jQuery(document).ready(function() {
		// initiate layout and plugins
		App.init();
		});
	</script>
	<!-- END PAGE LEVEL SCRIPTS -->
</body>
<!-- END BODY -->
</html>