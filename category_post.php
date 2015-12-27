<?php 
	require_once('Config/Database.php');
	require_once('header.php');
	require_once('navbar.php'); 
	require_once('sidebar.php'); ?>
<!-- CONTENT HERE -->
		<div class="col-md-9">
		<?php 
			if (isset($_GET['key'])) { 
			$getTitle = str_replace("-", " ", $_GET['cat']);	
			$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			$get_img = substr($actual_link, strrpos($actual_link, '/') + 1);
			$img = base64_decode($get_img);
		?>
			
				<h1 class="h1-single"><?php echo $getTitle; ?></h1>
				<br />
				<img class="thumbnail" src="<?php echo $img; ?>" onerror="this.src = '<?php echo $baseurl; ?>Assets/img/error_image.png';" alt="<?php echo $getTitle; ?>" title="<?php echo $getTitle; ?>" />
				<h2 class="h2-single"><?php echo $getTitle; ?></h2>
				<p>the best spot a major goal of all people, a comfortable shelter and safe for we live in, such as <strong><?php echo $getTitle; ?></strong> to be an item of inspiration to have a good place to live. Picture <strong><?php echo $getTitle; ?></strong> entry in the 3D Abstract and published on JUN 5, 2012. Beautiful home decor will affect the way we think about something, therefore the interior and exterior house became one of the main things to note.</p>

				<p>
				Note, Fun interior of a small idea for small houses home with yellow walls of home ideas kitchen remodel design wooden floor has two pendant lamps landing cupboard closet table chairs and cooled centerp interest. Attractive interior design inspired interior design. Design ideas easy prepossessing bedroom decorating ideas interior design. Design ideas superb home interior design ideas and architcture. It is better you have to understand your needs whether you want a special place to decorate a room to the inner or home design interior decoration is needed? When you understand <strong><?php echo $getTitle; ?></strong>, you can design beautiful decoration of your interior home. Here we suggest you some ideas interior decorating home design that can help you to design and decorate the interior of your home. These ideas range from simple to inspiration, traditional, contemporary, beautiful and slim for decorating ideas bewitching and captivating. By discovering the secrets of interior design, decorating ideas you can get inspired and create the interior design of your home so that inspiration and a symbol of beauty, functionality and practicality.
				</p>
				<p>
				Themes occupancy as what we want, well <strong><?php echo $getTitle; ?></strong> is included in the label 3D Abstract may be a basic overview for those of you who want to plan to make the home for a small family with a garden, bed and bathroom were quite outside for our use as well as possible
				</p>
			

		<?php } else {
			echo '
			
				<h1 class="h1-single"><?php echo str_replace("-", " ", $_GET["cat"]); ?> Category</h1>
				<div class="custom-hr"></div>
				<br />
			<div class="wall">';
			$get_keyword = str_replace("-", " ", $_GET['cat']);

			$query = $get_keyword;
		    $accountKey = 'Li9O+Yt4rVoPmdjCKcupbxnvyoxFak1FoR+2jZMxYiQ';
		    $serviceRootURL =  'https://api.datamarket.azure.com/Bing/Search/';  
		    $webSearchURL = $serviceRootURL . 'Image?$format=json&Query=';

		    $request = $webSearchURL . "%27" . urlencode( "$query" ) . "%27";

		    $process = curl_init($request);
		    curl_setopt($process, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		    curl_setopt($process, CURLOPT_USERPWD,  "$accountKey:$accountKey");
		    curl_setopt($process, CURLOPT_TIMEOUT, 30);
		    curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
		    $response = curl_exec($process);
		    $response = json_decode($response);
		    // var_dump($response->d->results); exit;

		    function clean($string) {
			    
			    return preg_replace('/[^A-Za-z0-9\-]/', ' ', $string);
			}

		    foreach( $response->d->results as $result ) 
		    {
		        if (isset($result)) {
		            
		            $title = clean($result->Title);
		            $width = $result->Width;
		            $height = $result->Height;
		            $size = $result->FileSize;
		            $type = $result->ContentType;
		            $image = $result->MediaUrl;
		            $URL = preg_replace('/[^A-Za-z0-9\-]/', '-', $title);
		            $URL2 = str_replace("---", "-", $URL);
		            $URL3 = str_replace("--", "-", $URL2);
		            $imgbase64 = base64_encode($image);
		            ?>

		            <div class="col-md-3">
					    <div class="thumbnail wall-item">
					    <a href="<?php echo $baseurl; ?>category/detail/<?php echo $URL3; ?>.html/<?php echo $imgbase64; ?>">
					      <img src="<?php echo $image; ?>" onerror="this.src = '<?php echo $baseurl; ?>Assets/img/error_image.png';" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
					    </a>  
					      <div class="caption">
					        <h1 class="h1-home"><?php echo $title; ?></h1>
					      </div>
					    </div>
				  	</div>
		            <?php
		        }
		    }
		    echo '</div>';
		}
		?> 	
	  	</div>
</div>
<!-- END OF CONTENT HERE -->
<?php
	require_once('footer.php'); ?>