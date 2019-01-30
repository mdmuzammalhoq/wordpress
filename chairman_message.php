<?php include 'include/header.php'; ?>
					<div class="art-contentLayout">
						<div class="art-sidebar1">
							<div id="text-5" class="widget widget_text">
								<div class="art-Block">
									<div class="art-Block-body">
										<div class="art-BlockHeader">
											<div class="l"></div>
											<div class="r"></div>
											<div class="art-header-tag-icon">
												<div class="t">
													Objectives of Inner Wheel
												</div>
											</div>
										</div>
										<div class="art-BlockContent">
											<div class="art-BlockContent-cc"></div>
											<div class="art-BlockContent-body">
												<div class="textwidget">
													<p align="left">
														<img alt="" height="79" src="images/objective2.png" width="258" />
													</p>
												</div>

												<div class="cleared"></div>
											</div>
										</div>

										<div class="cleared"></div>
									</div>
								</div>
							</div>
							<div id="linkcat-3" class="widget widget_links">
								<div class="art-Block">
									<div class="art-Block-body">
										<div class="art-BlockHeader">
											<div class="l"></div>
											<div class="r"></div>
											<div class="art-header-tag-icon">
												<div class="t">
													Links
												</div>
											</div>
										</div>
										<div class="art-BlockContent">
											<div class="art-BlockContent-cc"></div>
											<div class="art-BlockContent-body">

												<?php include ('include/left_links.php');?>

												<div class="cleared"></div>
											</div>
										</div>

										<div class="cleared"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="art-content">

							<div class="art-Post">
								<div class="art-Post-body">
									<div class="art-Post-inner art-article">
										<?php 
											// $sql = mysql_query("select * from chairman_message order by fld_id desc limit 1") or die(mysql_error());
											// $fetch_array = mysql_fetch_array($sql);

											$query = "select * from chairman_message order by fld_id desc limit 1";
											$msg = $db->select($query);
											if ($msg) {
												$result = $msg->fetch_assoc();
											}
										?>
										<h2 class="art-PostHeader"><a href="#" rel="bookmark" title="District Chairman"><?php echo $result['fld_title'];?></a></h2>
										<div class="art-PostContent">

											<table border="0" cellpadding="10" cellspacing="1" style="width: 100%">
												<tbody>
													<tr>
														<td valign="top"><img align="left" alt="" height="167" src="chairman/chairman.jpg" width="135" /></td>
														<td>
														<p>&nbsp;
															
														</p>
														<?php echo $result['fld_message'];?>
														<div>
															&nbsp;
														</div></td>
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
									<p class="art-page-footer">Designed by <a href="http://www.linktechbd.com/">Link Up Technologies</a>.</p>
									</div>

									<!-- 22 queries. 0.495 seconds. -->
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

									<!-- Mirrored from innerwheelbangladesh.org/?page_id=56 by HTTrack Website Copier/3.x [XR&CO'2006], Mon, 17 Dec 2012 07:09:10 GMT --> <!-- Added by HTTrack -->
									<meta http-equiv="content-type" content="text/html;charset=UTF-8">
									<!-- /Added by HTTrack -->
</html>
