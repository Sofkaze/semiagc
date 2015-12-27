<?php 
	require_once('Config/Database.php');
	require_once('header.php');
	require_once('navbar.php'); 
	require_once('sidebar.php'); ?>
<!-- CONTENT HERE -->

	<div class="col-md-9">

	<?php 
		$get_slug = $_GET['post'];
		$showSingle = mysqli_query($connecDB, "SELECT * FROM data_post WHERE slug = '$get_slug'")or die(mysql_error());
		$showRandom = mysqli_query($connecDB, "SELECT * FROM data_post ORDER BY rand() LIMIT 8")or die(mysql_error());
		$x = mysqli_fetch_array($showSingle);

		$initDate = new DateTime($x['time']);
		$initDate->add(new DateInterval("PT15M"));
		// echo $initDate->format("Y/m/d m:i:s");
	?>

		<h1 class="h1-single"><?php echo $x['title']; ?></h1>
		<div class="custom-hr"><i>Published on <?php echo $initDate->format("Y/m/d m:i:s"); ?> by <a href="">portsign</a></i></div>
		<br />
		<a href="<?php echo $baseurl.$x['slug'].".html/".$x['slug'].""; ?>">
			<img class="thumbnail" src="<?php echo $x['img_url']; ?>" onerror="this.src = '<?php echo $baseurl; ?>Assets/img/error_image.png';" alt="<?php echo $x['title']; ?>" title="<?php echo $x['title']; ?>" />
		</a>
		<h2 class="h2-single"><?php echo $x['title']; ?></h2>
		<p>the best spot a major goal of all people, a comfortable shelter and safe for we live in, such as <strong><?php echo $x['title']; ?></strong> to be an item of inspiration to have a good place to live. Picture <strong><?php echo $x['title']; ?></strong> entry in the 3D Abstract and published on JUN 5, 2012. Beautiful home decor will affect the way we think about something, therefore the interior and exterior house became one of the main things to note.</p>

		<p>
		Note, Fun interior of a small idea for small houses home with yellow walls of home ideas kitchen remodel design wooden floor has two pendant lamps landing cupboard closet table chairs and cooled centerp interest. Attractive interior design inspired interior design. Design ideas easy prepossessing bedroom decorating ideas interior design. Design ideas superb home interior design ideas and architcture. It is better you have to understand your needs whether you want a special place to decorate a room to the inner or home design interior decoration is needed? When you understand <strong><?php echo $x['title']; ?></strong>, you can design beautiful decoration of your interior home. Here we suggest you some ideas interior decorating home design that can help you to design and decorate the interior of your home. These ideas range from simple to inspiration, traditional, contemporary, beautiful and slim for decorating ideas bewitching and captivating. By discovering the secrets of interior design, decorating ideas you can get inspired and create the interior design of your home so that inspiration and a symbol of beauty, functionality and practicality.
		</p>
		<p>
		Themes occupancy as what we want, well <strong><?php echo $x['title']; ?></strong> is included in the label 3D Abstract may be a basic overview for those of you who want to plan to make the home for a small family with a garden, bed and bathroom were quite outside for our use as well as possible
		</p>
		<?php 
			//GET NEXT
			$getidNext = $x['id']+1;
			$showNext = mysqli_query($connecDB, "SELECT * FROM data_post WHERE id = '$getidNext' ")or die(mysql_error());
			$n = mysqli_fetch_array($showNext);
				$idN = $n['id'];
				$getNext = mysqli_query($connecDB, "SELECT * FROM data_post WHERE id = '$idN'");
				$nn = mysqli_fetch_array($getNext);
				// echo $nn['title'];


			//GET PREV
			$getidPrev = $x['id']-1;
			$showPrev = mysqli_query($connecDB, "SELECT * FROM data_post WHERE id = '$getidPrev' ")or die(mysql_error());
			$p = mysqli_fetch_array($showPrev);
				$idP = $p['id'];
				$getPrev = mysqli_query($connecDB, "SELECT * FROM data_post WHERE id = '$idP'");
				$pp = mysqli_fetch_array($getPrev);
				// echo $pp['title'];
		?>

		<div class="col-md-12">
			<center>
				<?php if ($pp['slug']=='') { ?>
					<a href="" class="btn btn-primary"><i class="glyphicon glyphicon-menu-left"> <?php echo $pp['title']; ?></i></a>
				<?php } else { ?>
					<a href="<?php echo $baseurl.$pp['slug'].".html"; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-menu-left"></i> <?php echo $pp['title']; ?></a>
				<?php  } ?>

				<?php if ($nn['slug']=='') { ?>
					<a href="" class="btn btn-primary"><?php echo $nn['title']; ?> <i class="glyphicon glyphicon-menu-right"></i></a>
				<?php } else { ?>
					<a href="<?php echo $baseurl.$nn['slug'].".html"; ?>" class="btn btn-primary"><?php echo $nn['title']; ?> <i class="glyphicon glyphicon-menu-right"></i></a>
				<?php  } ?>
			</center>
		</div>
		
			<br />
			<br />
			<br />
			<br />
		<div class="row">
		<div class="wall">
		<?php 
			while($y = mysqli_fetch_array($showRandom)) {
		?>

			<div class="col-md-3">
			    <a href="<?php echo $baseurl.$y['slug'].".html"; ?>" class="thumbnail wall-item">
			      	<img src="<?php echo $y['img_url']; ?>" alt="<?php echo $y['title']; ?>" title="<?php echo $y['title']; ?>" onerror="this.src = '<?php echo $baseurl; ?>Assets/img/error_image.png';" />
			    </a>
			</div>
			
		<?php } ?>	
		</div>
			
			<div class="col-md-12">
				<h3><i class="glyphicon glyphicon-tags"></i> Tags</h3>

				<?php 
					$combined_tag = explode(',', $x['tags']);
					foreach ($combined_tag as $combined_tags) {
						?>
							<a href="<?php echo $baseurl; ?>tags/<?php echo $combined_tags; ?>" class="btn btn-default btn-xs">
								<?php echo $combined_tags; ?>
							</a>
						<?php
					}
				?>

				
			</div>
			
		</div>
		<br />
	</div>

</div>
<!-- END OF CONTENT HERE -->
<?php
	require_once('footer.php'); ?>