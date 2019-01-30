<ul>
<?php 
	$query = "select * from news_events order by fld_id desc limit 2";
	$slider = $db->select($query);
	if ($slider) {
		while ($result = $slider->fetch_assoc()) {
?>	
	<li>
		<a href="newsandinformation.php" title="District Committee Meeting will be held at Gulshan Ladies Community Club."><?php echo $result['fld_news_event']; ?></a>
	</li>
<?php } } ?>	
</ul>





