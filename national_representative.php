<?php include 'include/header.php'; ?>
								<div class="art-contentLayout">
<?php include 'include/objective_inner.php'; ?>
<div class="art-content">

	<div class="art-Post">
		<div class="art-Post-body">
			<div class="art-Post-inner art-article">
				<h2 class="art-PostHeader"><a href="national_representative.html" rel="bookmark" title="National Rep &amp; Deputy National Representative"> National &#038; Deputy National Representative</a></h2>
				<div class="art-PostContent">

					<table border="0" cellpadding="1" cellspacing="1" style="width: 100%">
						<tbody>
                            <?php 
								// $sql = mysql_query("select * from details where fld_position_name= 'National Representative'");
								// $row = mysql_fetch_array($sql);
                            $query = "select * from details where fld_position_name= 'National Representative'";
							$msg = $db->select($query);
							if ($msg) {
								$result = $msg->fetch_assoc();
							}

							?>															
							<tr>
								<td style="width: 135px" valign="top"><img alt="" height="125" src="ec_committee1516/<?php echo $result['fld_img']; ?>" width="100" /></td>
								<td><h4>&nbsp;</h4><h4><?php echo $result['fld_name']; ?></h4>
								<p style="font-weight: normal; ">
									<?php echo $result['fld_position_name']; ?>
<!-- 																		<br />
									Club: IWC of Dhaka North East
									<br />
									Email: akhterjahankhuku@gmail.com -->
								</p>
								<p>&nbsp;
									
								</p>
								<p>&nbsp;
									
								</p></td>
							</tr>
							<?php 
								// $sql2 = mysql_query("select * from details where fld_position_name = 'Deputy National Representative'");
								// $row2 = mysql_fetch_array($sql2);
							 $query2 = "select * from details where fld_position_name = 'Deputy National Representative'";
							$msgg = $db->select($query2);
							if ($msgg) {
								$resultt = $msgg->fetch_assoc();
							}

							?>																
							<tr>
								<td style="width: 135px" valign="top"><img alt="" height="126" src="ec_committee1516/<?php echo $resultt['fld_img']; ?>" width="100" /></td>
								<td><h4><?php echo $resultt['fld_name']; ?></h4>
								<p>
									<?php echo $resultt['fld_position_name']; ?>
									<!-- <br />
									Club: IWC of Uttara
									<br />
									Email: sunflower9635@gmail.com -->
								</p></td>
							</tr>
						</tbody>
					</table>
					<p>&nbsp;
						
					</p>

				</div>
				<div class="cleared"></div>

			</div>

			<div class="cleared"></div>
		</div>
	</div>

</div>

</div>
<div class="cleared"></div>

<div class="art-Footer">
<div class="art-Footer-inner">
	<a href="indexd784.html?feed=rss2" class="art-rss-tag-icon" title="RSS"></a>
	<div class="art-Footer-text">
		<p>
			<a href=index8067.html?page_id=14>Contact Us</a> | <a href=\\\'#\\\'>Credits</a> | <br />
			Copyright © 2010 Inner Wheel 328 Bangladesh. All Rights Reserved.</p>
			</div>
			</div>
			<div class="art-Footer-background">
			</div>
			</div>

			<div class="cleared"></div>
			</div>
			</div>
			<div class="cleared"></div>
			<p class="art-page-footer">Designed by <a href="http://www.linktechbd.com/">link up technologies</a>.</p>
			</div>

			<!-- 19 queries. 0.816 seconds. -->
			<div>
			<script type="text/javascript">tb_pathToImage = "wp-includes/js/thickbox/loadingAnimation.gif";tb_closeImage = "wp-includes/js/thickbox/tb-close.png";</script>
			<script type='text/javascript' src='wp-content/plugins/contact-form-7/jquery.form9ec9.js?ver=2.47'></script>
			<script type='text/javascript' src='wp-content/plugins/contact-form-7/scripts8066.js?ver=2.4.1'></script>
			<script type='text/javascript'>
			/* <![CDATA[ */
			var thickboxL10n = {"next":"Next >","prev":"< Prev","image":"Image","of":"of","close":"Close","noiframes":"This feature requires inline frames. You have iframes disabled or your browser does not support them.","loadingAnimation":"http:\/\/innerwheelbangladesh.org\/wp-includes\/js\/thickbox\/loadingAnimation.gif","closeImage":"http:\/\/innerwheelbangladesh.org\/wp-includes\/js\/thickbox\/tb-close.png"};
			/* ]]> */
			</script>
			<script type='text/javascript' src='wp-includes/js/thickbox/thickbox9d46.js?ver=3.1-20111117'></script>
			</div>
			</body>

			<!-- Mirrored from innerwheelbangladesh.org/?page_id=127 by HTTrack Website Copier/3.x [XR&CO'2006], Mon, 17 Dec 2012 07:09:32 GMT --> <!-- Added by HTTrack -->
			<meta http-equiv="content-type" content="text/html;charset=UTF-8">
												<!-- /Added by HTTrack -->
		</html>
