<?php 
	require_once('Config/Database.php');
	require_once('header.php');
	require_once('navbar.php'); 
	require_once('sidebar.php'); ?>
<!-- CONTENT HERE -->



	<div class="col-md-9">
		<h1 class="h1-single"><?php echo $_GET['tag']; ?> Tag</h1>
		<div class="custom-hr"></div>
		<br />
		<div class="wall">
		<?php 
			require_once('Machine/pagination.php');
			$p = new tagsPage;
			$batas  = 20;
		    $posisi = $p->cariPosisi($batas);
			$get_tags = $_GET['tag'];
			$showSingle = mysqli_query($connecDB, "SELECT * FROM data_post WHERE tags LIKE '%$get_tags%' ORDER BY id DESC LIMIT $posisi,$batas")or die(mysql_error());
			while($x = mysqli_fetch_array($showSingle)) {
			
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

	  	<?php 
		  	$jmldata = mysqli_num_rows(mysqli_query($connecDB, "SELECT * FROM data_post"));
		  	$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
		  	$linkHalaman = $p->navHalaman($_GET['pages'], $jmlhalaman);
		  	echo "<div class='col-md-12' style='border:none;'>
		  			<div id=paging>
		  				<font size='3'>
		  					<a href='".$baseurl."' class='btn btn-primary btn-xs'><<</a> 
		  						$linkHalaman
		  				</font>
		  			</div>
		  			<br />
		  		</div>";
		?>
	  	

	</div>

</div>
<!-- END OF CONTENT HERE -->
<?php
	require_once('footer.php'); ?>