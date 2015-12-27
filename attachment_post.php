<?php 
	require_once('Config/Database.php');
	require_once('header.php');
	require_once('navbar.php'); 
	require_once('sidebar.php'); ?>
<!-- CONTENT HERE -->

	<?php 
		$get_slug = $_GET['post'];
		$showSingle = mysqli_query($connecDB, "SELECT * FROM data_post WHERE slug = '$get_slug'")or die(mysql_error());
		$x = mysqli_fetch_array($showSingle);
	?>

	<div class="col-md-9">
		<h1 class="h1-single"><?php echo $x['title']; ?></h1>
		<br />
		<img class="thumbnail" src="<?php echo $x['img_url']; ?>" onerror="this.src = '<?php echo $baseurl; ?>Assets/img/error_image.png';" alt="<?php echo $x['title']; ?>" title="<?php echo $x['title']; ?>" />
		<h2 class="h2-single"><?php echo $x['title']; ?></h2>
		<p>the best spot a major goal of all people, a comfortable shelter and safe for we live in, such as <strong><?php echo $x['title']; ?></strong> to be an item of inspiration to have a good place to live. Picture <strong><?php echo $x['title']; ?></strong> entry in the 3D Abstract and published on JUN 5, 2012. Beautiful home decor will affect the way we think about something, therefore the interior and exterior house became one of the main things to note.</p>

		<p>
		Note, Fun interior of a small idea for small houses home with yellow walls of home ideas kitchen remodel design wooden floor has two pendant lamps landing cupboard closet table chairs and cooled centerp interest. Attractive interior design inspired interior design. Design ideas easy prepossessing bedroom decorating ideas interior design. Design ideas superb home interior design ideas and architcture. It is better you have to understand your needs whether you want a special place to decorate a room to the inner or home design interior decoration is needed? When you understand <strong><?php echo $x['title']; ?></strong>, you can design beautiful decoration of your interior home. Here we suggest you some ideas interior decorating home design that can help you to design and decorate the interior of your home. These ideas range from simple to inspiration, traditional, contemporary, beautiful and slim for decorating ideas bewitching and captivating. By discovering the secrets of interior design, decorating ideas you can get inspired and create the interior design of your home so that inspiration and a symbol of beauty, functionality and practicality.
		</p>
		<p>
		Themes occupancy as what we want, well <strong><?php echo $x['title']; ?></strong> is included in the label 3D Abstract may be a basic overview for those of you who want to plan to make the home for a small family with a garden, bed and bathroom were quite outside for our use as well as possible
		</p>
		<div class="row">
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