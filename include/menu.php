<li class="page_item page-item-147 current_page_item">
<a class="active" href="index.php"><span class="l"></span><span class="r"></span><span class="t">Home</span></a>
<ul class='children'>
<li class="page_item page-item-165">
<a href="indexec34.php?page_id=165">What is Inner Wheel</a>									</li>
<li class="page_item page-item-210">
<a href="indexbc9e.php?page_id=37">History of Inner wheel</a>									</li>
<li class="page_item page-item-221">
<a href="indexa35a.php?page_id=221">Our objectives</a>	</li>
<li class="page_item page-item-302">
<a href="indexd622.php?page_id=302">Links</a>
<ul class='children'>
<li class="page_item page-item-44">
<a href="iiw.php?page_id=165">IIW</a></li>
<li>
<a href="http://www.freewebs.com/innerwheel-dhanmondi/">Inner Wheel club of Dhanmondi</a></li>
<li class="page_item page-item-56">
<a href="rotary.php?page_id=56">Rotary 3280</a></li>
</li>
</ul>
</li>
</ul>
<li class="page_item page-item-2">
<a href="indexba53.php?page_id=2"><span class="l"></span><span class="r"></span><span class="t">About Us</span></a>
<ul class='children'>
<li class="page_item page-item-21">
<a href="index1766.php?page_id=21">National Anthem</a></li>
<li class="page_item page-item-37">
<a href="index1766.php">Inner wheel Prayer</a></li>
<li class="page_item page-item-42">
<a href="chairman_message.php">Message</a>
<ul class='children'>
<li class="page_item page-item-44">
<a href="iiw_president.php">From IIW President</a></li>
<li class="page_item page-item-56">
<a href="chairman_message.php">From District Chairman</a></li>
<li class="page_item page-item-66">
<a href="national_representative_message.php">From National Representative</a>	</li>
<li class="page_item page-item-72">
<a href="indexade1.php?page_id=72">From Founder Chairman</a></li>

<li class="page_item page-item-107">
<a href="message_from_website_in_charge.php">Message from Dist. I.S.O.</a></li>
</ul>
</li>
<li class="page_item page-item-75">
<a href="index8a92.php?page_id=75">Fact Sheet</a></li>
</ul>
</li>
<li class="page_item page-item-8">
<a href="indexec34.php"><span class="l"></span><span class="r"></span><span class="t">Who is who</span></a>
<ul class='children'>
<li class="page_item page-item-117">
<a href="committee.php">IWD EC Committee</a></li>
<li class="page_item page-item-127">
<a href="national_representative.php">National Rep &#038; Deputy National Rep</a>					</li>
<li class="page_item page-item-133">
<a href="">Know the past Leaders</a>
<ul class='children'>
<li class="page_item page-item-136">
<a href="indexa11e.php?page_id=136">District Founder Leader</a>								</li>
<li class="page_item page-item-138">
<a href="index66d0.php?page_id=138">Galaxy of our District</a>									</li>
</ul>
</li>
</ul>
</li>
<li class="page_item page-item-12">
<a href="photo_gallery.php"><span class="l"></span><span class="r"></span><span class="t">Photo Gallery</span></a>
<ul class='children'>
	<li class="page_item page-item-270">
	<?php
		// $sql = mysqli_query("select * from menu_name_change where fld_id = 2");
		// $query = mysqli_fetch_array($sql);
	$query = "select * from menu_name_change where fld_id = 2";
	$photo = $db->select($query);
	if ($photo) {
		$result = $photo->fetch_assoc();
	}
	?>
		<a href="photo_gallery.php"><?php echo $result['name']; ?></a>
	</li>

	<li class="page_item page-item-138">
		<a href="projects201415.php">Inner Wheel Projects 2016-2017</a>
	</li>
</ul>
</li>	
<!-- 
   <li class="page_item page-item-138">
<a href="">Photo Archive</a>
<ul class='children'>
<li class="page_item page-item-272">
<a href="index0c4f.php?page_id=270">2012-2013</a>										</li>
<li class="page_item page-item-272">
<a href="index1c83.php?page_id=272">2011-2012</a>										</li>
<li class="page_item page-item-273">
<a href="indexe43e.php?page_id=273">2010-2011</a>										</li>
</ul>
</li> 
-->
<li class="page_item page-item-10">
<a href="newsandinformation.php"><span class="l"></span><span class="r"></span><span class="t">News and information</span></a></li>
</li>

<li class="page_item page-item-171">
<a href="publications.php"><span class="l"></span><span class="r"></span><span class="t">Publications</span></a>
<ul class='children'>
<li class="page_item page-item-189">
<a href="publications.php">Publications by IWC 328</a>	</li>
</ul>
</li>
<li class="page_item page-item-14">
<a href="contact.php"><span class="l"></span><span class="r"></span><span class="t">Contact us</span></a></li>