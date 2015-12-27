<?php 
	$showAll = mysqli_query($connecDB, "SELECT * FROM options");
	$m = mysqli_fetch_array($showAll);
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<?php 
		if (isset($_GET['post'])) {
			?>
				<title><?php echo $string = str_replace('-', ' ', $_GET['post']); ?></title>
			<?php
		} else {
			echo '<title>Infinity HD Wallpapers | '.$m["domainname"].'</title>';
		}
	?>
	
	<meta name="revisit-after" content="2 days">
	<meta name="netinsert" content="840.0.1.1.2.1">
	<meta name="description" content="Vectors and Illustrations Nature wallpaper stock photos, the world’s largest royalty-free image, HD picture, and Free Wallpaper Illustrations." />
	<meta name="keywords" content="Vectors and Illustrations Nature wallpaper stock photos, the world’s largest royalty-free image, HD picture, and Free Wallpaper Illustrations." />
	<link rel='canonical' href='<?php echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>'/>
	<meta name="distribution" content="global" />
	<meta name="resource-type" content="document" />
	<meta name="rating" content="General" />
	<?php if (isset($_GET['p'])) { ?>
	<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
	<?php } else { ?>
	<meta name="ROBOTS" content="INDEX, ALL" />
	<meta name="ROBOTS" content="INDEX, FOLLOW" />
	<?php } ?>
	<meta http-equiv="content-language" content="en" />
	<meta property="og:type" content="website"/>
	<meta property="og:title" content="Nature Photos, Download Nature Wallpapers, Download Free Nature Wallpapers, Latest Pics, Pictures, Images"/>
	<meta property="og:url" content="<?php echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" />
	<meta property="og:image" content="" />
	<meta property="og:description" content="Vectors and Illustrations Nature wallpaper stock photos, the world’s largest royalty-free image, HD picture, and Free Wallpaper Illustrations." />
	<link rel="icon" href="<?php echo $baseurl; ?>Assets/img/google_dev.png" type="image/gif" sizes="16x16" />
	<link rel="stylesheet" href="<?php echo $baseurl; ?>css/bootstrap.css" />
	<link rel="stylesheet" href="<?php echo $baseurl; ?>css/stylesheet.css" />
	<link rel="stylesheet" href="<?php echo $baseurl; ?>css/bootstrap-theme.min.css" />
	<script src="<?php echo $baseurl; ?>js/jquery.min.js"></script>
	<script src="<?php echo $baseurl; ?>js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">