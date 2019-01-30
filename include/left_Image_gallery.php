<div class="ngg-widget entry-content">

	<?php 

		// $sql = mysql_query("select * from photo_gallery order by fld_id desc limit 6");

		// while($row = mysql_fetch_array($sql)){
	$query = "select * from photo_gallery order by fld_id desc limit 6";
	$slider = $db->select($query);
	if ($slider) {
		while ($result = $slider->fetch_assoc()) {


	?>

	<a href="img_201516/<?php echo $result['fld_img']; ?>" title="Celebrating innerwheel day " class="thickbox" rel="ngg-images-3">

		<img src="img_201516/<?php echo $result['fld_img']; ?>" width="75" height="50" title="49" alt="49" />

	</a>								   

<?php } } ?>



</div>