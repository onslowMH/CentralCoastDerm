<?php
$fbookIconUrl = 'images/icon_fbook.png';
$twitterIconUrl = 'images/icon_twitter.png';
$youtubeIconUrl = 'images/icon-youtube.png';
function getIconHtml($imgurl, $href, $iconWidth = 20) {	
	ob_start();
	?>
	<a href="<?php echo $href ?>" target="_blank"><img src="<?php echo $imgurl ?>" alt="Facebook" width="<?php echo $iconWidth ?>" border="0" /></a>
	<?php
	$html = ob_get_contents();
	ob_end_clean();
	// return the buffer
	return $html;
	
} 



$practice = new stdClass();
$practice->fbookUrl = 'https://www.facebook.com/CentralCoastDermatology';
$practice->twitterUrl = 'https://twitter.com/OAS_Practices';
$practice->youtubeUrl = 'https://www.youtube.com/channel/UCioC3eXyDwRj7q4jUnvUtxw';

$hospital = new stdClass();
$hospital->fbookUrl = 'http://www.facebook.com/OnslowHospital';
$hospital->twitterUrl = 'http://www.twitter.com/onslowhospital';
$hospital->youtubeUrl = 'http://www.youtube.com/onslowhospital';



 ?>

<div id="footer">
	<img src="images/footer-top.png" width="920" height="9" />
	 <p class="footer-nav"><img src="images/spacer.gif" width="198" height="1" />&copy;<?php echo date("Y") ;?> Central Coast Dermatology&nbsp;&nbsp;|&nbsp;&nbsp;<a href="index.php" title="Click here to go to the home page">Home</a>&nbsp;|&nbsp;<a href="services.php" title="Click here to view our services">Services</a>&nbsp;|&nbsp;<a href="info.php" title="Click here for Patient Information">Patient Information</a>&nbsp;|&nbsp;<a href="resources.php">Resources</a>&nbsp;|&nbsp;<a href="staff.php" title="Click here for Staff Information">Staff</a>&nbsp;|&nbsp;<a href="forms.php" title="Click here for Forms">Forms</a>&nbsp;|&nbsp;<a href="news.php" title="Click here for the latest news">News</a></p>
  <p><?php echo getIconHtml($fbookIconUrl, $practice->fbookUrl) ?><?php echo getIconHtml($twitterIconUrl, $practice->twitterUrl) ?><?php echo getIconHtml($youtubeIconUrl, $practice->youtubeUrl) ?> Connect with Central Coast Dermatology </p>
  <p><?php echo getIconHtml($fbookIconUrl, $hospital->fbookUrl) ?><?php echo getIconHtml($twitterIconUrl, $hospital->twitterUrl) ?><?php echo getIconHtml($youtubeIconUrl, $hospital->youtubeUrl) ?>  Connect with Onslow Memorial Hospital </p>
  <div class="logo-wrap" style="text-align: center; margin: 20px;"><img src="images/logo-oas.png" width="76px;"></div>
</div>

<!-- <div id="footer"><img src="images/footer-top.png" width="920" height="9" />
  <p><a href="http://www.facebook.com/OnslowHospital" target="_blank"><img src="images/FB.png" alt="Facebook" width="12" height="12" border="0" /></a> Connect with Onslow Memorial Hospital <img src="images/spacer.gif" width="198" height="1" />&copy;<?php echo date("Y") ;?> Central Coast Dermatology&nbsp;&nbsp;|&nbsp;&nbsp;<a href="index.php" title="Click here to go to the home page">Home</a>&nbsp;|&nbsp;<a href="services.php" title="Click here to view our services">Services</a>&nbsp;|&nbsp;<a href="info.php" title="Click here for Patient Information">Patient Information</a>&nbsp;|&nbsp;<a href="resources.php">Resources</a>&nbsp;|&nbsp;<a href="staff.php" title="Click here for Staff Information">Staff</a>&nbsp;|&nbsp;<a href="forms.php" title="Click here for Forms">Forms</a>&nbsp;|&nbsp;<a href="news.php" title="Click here for the latest news">News</a></p>
</div> -->
