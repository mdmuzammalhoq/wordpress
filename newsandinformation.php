<?php include 'include/header.php'; ?>
					<div class="art-contentLayout">
<?php include 'include/objective_inner.php'; ?>
						<div class="art-content">
							<div class="art-Post">
								<div class="art-Post-body">
									<div class="art-Post-inner art-article">
										<h2 class="art-PostHeader"><a href="newsandinformation.php" rel="bookmark" title="News and Information"> News and Information</a></h2>
										<div class="art-PostContent">
											<div style="margin-left:0px;">
											<?php 
												// $sql = mysql_query("select * from news_events order by fld_id desc");
												// while($row = mysql_fetch_array($sql)){
											$query = "select * from news_events order by fld_id desc";
											$news = $db->select($query);
											if ($news) {
													while ($result = $news->fetch_assoc()) {	
											?>	
												<h4 style="margin-bottom:0px;"><?php echo $result['fld_title']; ?></h4><?php if(!empty($result['Event_date'])){?> <i style="font-size:11px;"><strong>Date: <?php echo $result['Event_date']; ?>	</strong></i><?php } ?>
												<P><?php echo $result['fld_news_event'];?></p>
											<?php } } ?>
											</div>
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
										<p class="art-page-footer">Designed by <a href="http://www.linktechbd.com/">Link-Up Technology</a>.</p>
										</div>

										<!-- 26 queries. 1.661 seconds. -->
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

										<!-- Mirrored from innerwheelbangladesh.org/ by HTTrack Website Copier/3.x [XR&CO'2006], Mon, 17 Dec 2012 07:06:07 GMT --> <!-- Added by HTTrack -->
										<meta http-equiv="content-type" content="text/html;charset=UTF-8">
										<!-- /Added by HTTrack -->
</html>
