<div id="slider">

	<?php
		$query = "select * from slider_picture order by fld_id asc";
		$slider = $db->select($query);
		if ($slider) {
			while ($result = $slider->fetch_assoc()) {

	?>

		<img src="slider_picture/<?php echo $result['fld_img']; ?>" alt="<?php echo $result['fld_title']; ?>" width="208" height="200"/>

	<?php } } ?>

</div>

