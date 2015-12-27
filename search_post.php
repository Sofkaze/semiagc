<?php 
	require_once('Config/Database.php');
	require_once(__ROOT__.'/header.php');
	require_once(__ROOT__.'/navbar.php'); 
	require_once(__ROOT__.'/sidebar.php'); ?>
<!-- CONTENT HERE -->

	<?php 
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$get_keyword = substr($actual_link, strrpos($actual_link, '=') + 1);
	// echo $get_keyword; exit;
	?>

	<div class="col-md-9">
		<h1 class="h1-single">Your Keyword : <?php echo $get_keyword; ?></h1>
		
		<div class="custom-hr"><i>Result : </i></div>
		<br />
		<div class="wall">
		<?php 
			
			
			$showResult = mysqli_query($connecDB, "SELECT * FROM data_post WHERE title LIKE '%$get_keyword%' ORDER BY id DESC LIMIT 30")or die(mysql_error());
			while($x = mysqli_fetch_array($showResult)) {
			
		?>

		<div class="col-md-3">
		    <div class="thumbnail wall-item">
		      	<a href="<?php echo $baseurl.$x['slug'].".html"; ?>">
		      		<img src="<?php echo $x['img_url']; ?>" onerror="this.src = '<?php echo $baseurl; ?>Assets/img/error_image.png';" alt="<?php echo $x['title']; ?>" title="<?php echo $x['title']; ?>" />
		      	</a>
		      	<div class="caption">
		        	<h1 class="h1-home"><a href="<?php echo $baseurl.$x['slug'].".html"; ?>"><?php echo $x['title']; ?></a></h1>
		      	</div>
		    </div>
	  	</div>
	  	

	  	<?php } ?>
	  	</div>
	  	

	</div>

</div>
<!-- END OF CONTENT HERE -->
<?php
	require_once(__ROOT__.'/footer.php'); ?>