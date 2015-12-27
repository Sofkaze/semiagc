<?php 
$link =  "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = $link;
$path = parse_url($url, PHP_URL_PATH);
$segments = explode('/', rtrim($path, '/'));
// echo end($segments);
?>
<div class="col-md-2 sidebar">
	<ul class="nav nav-pills nav-stacked">
		<li <?php if (end($segments)=='dashboard.php') { ?>class="active"<?php } ?> ><a href="<?php echo $baseurl; ?>Administrator/dashboard.php">Dashboard</a></li>
		<li <?php if (end($segments)=='posting.php') { ?>class="active"<?php } ?>><a href="posting.php">Keep Post</a></li>
		<li <?php if (end($segments)=='keywords.php') { ?>class="active"<?php } ?>><a href="keywords.php">My Keywords</a></li>
		<li <?php if (end($segments)=='about.php') { ?>class="active"<?php } ?>><a href="about.php">About</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
</div>