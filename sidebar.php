
<div class="row">
	<div class="col-sm-4 col-md-3 sidebar">
	    <div class="mini-submenu">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	    </div>
	    <div class="list-group">
	        <span href="#" class="list-group-item active">
	            Category
	            <span class="pull-right" id="slide-submenu">
	                <i class="fa fa-times"></i>
	            </span>
	        </span>
	        <?php include('KEYWORD.php'); ?>
	        <?php 	
	        function my_get_google_hot_trend($country_code) { 
			    $result = array( 
			        'data' => array(), 
			        'error' => '' 
			    ); 
			    $res = xrvel_curl('http://www.google.com/trends/hottrends/widget?pn='.$country_code.'&tn=20&h=413'); 
			    if ($res == '') { 
			        $result['error'] = 'Failed. Empty response.'; 
			        return $result; 
			    } 
			    if (!preg_match_all("/\<span class='widget-title-in-list'\>(.*)\<\/span\>\<\/span\>\<span class='widget-list-more-arrow/siU", $res, $match)) { 
			        $result['error'] = 'Failed to parse.'; 
			        return $result; 
			    }
			    $baseurl = "http://" . $_SERVER['SERVER_NAME']."/";
			    $keywords = $match[1]; 
			    $result['data'] = $keywords; 
			    $category = implode(",",$result['data']);
			    $combined_cat = explode(',', $category);
			    foreach ($combined_cat as $combined_cats) {

			    	$seo_cat = str_replace(' ', '-', $combined_cats);
			    	$seo_category = preg_replace('/[^A-Za-z0-9\-]/', '', $seo_cat);
			    
			    ?>
			    
			    	<a href="<?php echo $baseurl."category/".$seo_category; ?>" class="list-group-item">
			            <i class="fa fa-comment-o"></i> <?php echo $combined_cats; ?>
			        </a>
			    
			    <?php
				    }
				}
		        ?>
	    </div>

	    <div class="list-group">
	        <span href="#" class="list-group-item active">
	            Google Ads
	            <span class="pull-right" id="slide-submenu">
	                <i class="fa fa-times"></i>
	            </span>
	        </span>
	        
	    </div>  

	    <div class="list-group">
	        <span href="#" class="list-group-item active">
	            Recent Post
	            <span class="pull-right" id="slide-submenu">
	                <i class="fa fa-times"></i>
	            </span>
	        </span>
	        <ul class="media-list">
	        <?php 
	        	$getRecentPost = mysqli_query($connecDB, "SELECT * FROM data_post ORDER BY id DESC LIMIT 10");
	        	while($g = mysqli_fetch_array($getRecentPost)) {
	        ?>


					<li class="list-group-item" style="padding:10px;">
					    <div class="media-left">
						    <a href="<?php echo $baseurl.$g['slug'].".html"; ?>">
					        	<img class="media-object" src="<?php echo $g['img_url']; ?>." alt="<?php echo $g['title']; ?>" title="<?php echo $g['title']; ?>" width="50" alt="<?php echo $g['title']; ?>" onerror="this.src = '<?php echo $baseurl; ?>Assets/img/error_image.png';" />
					    	</a>
					    </div>
					    <div class="media-body">
					      <h3 class="media-heading"><a href="<?php echo $baseurl.$g['slug'].".html"; ?>"><?php echo $g['title']; ?></a></h3>
					    </div>
					</li>
				

	        <?php } ?>
	        </ul>
	    </div>        
	</div>