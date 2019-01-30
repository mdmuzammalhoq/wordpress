<?php include 'include/header.php'; ?>
					<div class="art-contentLayout">
<?php include 'include/objective_inner.php'; ?>
						<div class="art-content">

							<div class="art-Post">
								<div class="art-Post-body">
									<div class="art-Post-inner art-article">
										<h2 class="art-PostHeader"><a href="index.php" rel="bookmark" title="Inner Wheel Bangladesh">Home</a></h2>
<div class="art-PostContent">
										<?php 
											// $q = mysql_query("select * from chairman_message order by fld_id desc limit 1");
											// $fetch = mysql_fetch_array($q);

											$query = "select * from chairman_message order by fld_id desc limit 1";
											$msg = $db->select($query);
											if ($msg) {
												$result = $msg->fetch_assoc();
											}
										?>
											<h4><?php echo $result['short_title'];?>&nbsp;</h4>
											<blockquote>
												<p>
													<span style="font-size: 12px"><img align="right" alt="" border="1" height="93" src="chairman/chairman.jpg" width="75" /></span>
												</p>
												<p>&nbsp;
													
												</p>
												<?php echo $result['short_message']; ?>		
											</blockquote>
</div>
<style>
	.img_detail{
		    height: 216px;
    		width: 133px;
    		text-align: center;	
    		padding-left: 23px;	
    		float: left;
	}

	.image{
		/*width: 97%;*/ 
		/*float: left; */
		border: 1px solid #7997B5;
		margin: 9px;
		height: 740px;
    	border-radius: 5px;
    	background: #EDEFF0;
	}
</style>
<div class="image">
<h4 style="padding-left: 7px;">IWD EC Committee</h4>

<div class="man">
<?php 
	$query = "select * from details order by fld_order_level asc";
	$committee = $db->select($query);
	if ($committee) {
		while ($result = $committee->fetch_assoc()) {
?>

	<div class="img_detail">

	<img style="width: 90px; height: 90px;border: 1px solid #7997B5;" src="ec_committee1516/<?php echo $result['fld_img']; ?>" alt="">
	<div style="font-size: 9px; width: 120px; text-align: center;">
		
		<span style="font-weight: bold; "><?php echo $result['fld_name']; ?></span> <br><?php echo $result['fld_details']; ?>
	</div>
</div>

<?php } } ?>
</div>
</div>
<div style="clear: both; margin-bottom: 20px;"></div>

<div style="border: 1px solid #7997B5;padding: 0px 12px;margin-bottom: 10px;border-radius: 5px; width: 94%;margin-left: 10px;background: #EDEFF0;">
												<h4>What is Inner Wheel</h4>
											<p>
												<script type="text/javascript">
AC_FL_RunContent( 'align','left','codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0','height','100','hspace','10','vspace','10','width','100','pluginspage','http://www.macromedia.com/go/getflashplayer','quality','high','src','wp-content/uploads/logo','movie','wp-content/uploads/logo' ); //end AC code
</script><noscript><object align="left" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" height="100" hspace="10" vspace="10" width="100">
													<param name="quality" value="high" />
													<param name="movie" value="wp-content/uploads/logo.swf" />
													<embed height="100" hspace="10" pluginspage="http://www.macromedia.com/go/getflashplayer" quality="high" src="wp-content/uploads/logo.swf" type="application/x-shockwave-flash" vspace="10" width="100"></embed>
												</object></noscript>
												Inner Wheel is one of internationally reputed Women&rsquo;s voluntary &ldquo;service&rdquo; Organization involved in philanthropic activities throughout the world. Inner Wheel Clubs throughout the world comprise the womenfolk of Rotarians. It is active in over 100 countries and geographic locations with over a hundred thousand members.
											</p>
											<p>
												Inner Wheel concentrates upon Friendship and Personal Service. It is not what is termed a money raising organization but each club has projects that build fellowship and raise money to support charities.
											</p>
											<p>
												One of the greatest features of Inner Wheel is the opportunity given to members of the world over to get know one another, thus contributing to International Friendship and Understanding. Although there is a serious side to this organization, the emphasis is upon members enjoying the part they play in the world of Inner Wheel.
											</p>
											<p>
												International Inner Wheel began in July, 1967. International Inner Wheel is one of the largest women&rsquo;s organizations with 98,173 members, spread over 103 countries in 168 Districts in almost 4130 clubs. The structure of Inner Wheel is :
											</p>
											<ul>
												<li>
													International Inner Wheel Associations &amp; Councils (Eligible countries)												</li>
												<li>
													Non District Clubs												</li>
												<li>
													Districts (Clubs from a District)												</li>
												<li>
													Clubs (12 Members from a Club)												</li>
											</ul>
<p>
												As an NGO, International Inner Wheel has a consultative status at the UN and consequently members are appointed to represent Inner Wheel at the United States, Geneva and 2 in Vienna.
												<br />
												Since its inception in 1924, Inner Wheel continues to grow as new clubs from in different countries.
											</p>
											<p>
												Each Club enjoys close ties with its corresponding Rotary Club and is always willing to support and assist Rotary when invited to do so.
											</p>
											<p style="text-align: right">
												<strong><a href="indexec34.php">Read More</a></strong>											</p>

</span></p>
											</div>

										</div>
<div style="border: 1px solid #7997B5;background: #EDEFF0;width: 98%;margin-left: 10px;border-radius: 5px;">
											<h4 style="padding-left: 10px;">News & Events</h4>
										<p>
												<script type="text/javascript">
AC_FL_RunContent( 'align','left','codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0','height','100','hspace','10','vspace','10','width','100','pluginspage','http://www.macromedia.com/go/getflashplayer','quality','high','src','wp-content/uploads/logo','movie','wp-content/uploads/logo' ); //end AC code
</script><noscript><object align="left" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" height="100" hspace="10" vspace="10" width="100">
													<param name="quality" value="high" />
													<param name="movie" value="wp-content/uploads/logo.swf" />
													<embed height="100" hspace="10" pluginspage="http://www.macromedia.com/go/getflashplayer" quality="high" src="wp-content/uploads/logo.swf" type="application/x-shockwave-flash" vspace="10" width="100"></embed>
												</object></noscript>
												
											</p>
											
											
											
											<ul>
<?php 
	$query = "select * from news_events order by fld_id desc limit 10";
	$slider = $db->select($query);
	if ($slider) {
		while ($result = $slider->fetch_assoc()) {
?>	
	<li>
		<a href="newsandinformation.php" title="District Committee Meeting will be held at Gulshan Ladies Community Club."><?php echo $result['fld_news_event']; ?></a>
	</li>
<?php } } ?>	
</ul>

											

</span></p>
										</div>
										<div class="cleared"></div>

									</div>

									<div class="cleared"></div>
								</div>
							</div>

						</div>

					</div>
					<div class="cleared"></div>

<?php include 'include/footer.php'; ?>
