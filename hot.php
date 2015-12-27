<?php 
	require_once('Config/Database.php');
	require_once('header.php');
	require_once('navbar.php'); 
	require_once('sidebar.php'); ?>
<!-- CONTENT HERE -->



	<div class="col-md-9">
		<h1 class="h1-single">What are the most trend Wallpaper in the world?</h1>
		<div class="custom-hr"></div>
		<br />
		
		<!-- 


		NOTE OF COUNTRY CODE TRENDING
		p1 = america
		p30 = Argentina
		p8 = Australia
		p41 = belgium
		p18 = brazil
		p13 = canada
		p32 = columbia
		p43 = Czech Republic
		p49 = denmark
		p29 = Egypt
		p50 = Finland
		p16 = France
		p15 = Germany
		p48 = Greece
		p10 = Hong Kong
		p45 = Hungary

		-->

		<?php 

			$keyword2 = my_get_google_hot_trend2('p30'); 
			echo ''; print_r($keyword2['data']); 
			echo ''; 

			function xrvel_curl2($url2) { 
			    $ch2 = curl_init(); 
			    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true); 
			    curl_setopt($ch2, CURLOPT_AUTOREFERER, true); 
			    curl_setopt($ch2, CURLOPT_HEADER, false); 
			    @curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, true); 
			    @curl_setopt($ch2, CURLOPT_MAXREDIRS, 2); 
			    curl_setopt($ch2, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6'); 
			    curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false); 
			    curl_setopt($ch2, CURLOPT_COOKIEJAR, dirname(__FILE__).'/cookie2.txt'); 
			    curl_setopt($ch2, CURLOPT_COOKIEFILE, dirname(__FILE__).'/cookie2.txt'); 
			    curl_setopt($ch2, CURLOPT_TIMEOUT, 40); 
			    curl_setopt($ch2, CURLOPT_URL, $url2); 
			    curl_setopt($ch2, CURLOPT_REFERER, $url2); 
			    $res2 = trim(curl_exec($ch2)); 
			    curl_close($ch2); 
			    unset($ch2); 
			    return $res2; 
			} 

			function my_get_google_hot_trend2($country_code2) { 
			    $result2 = array( 
			        'data' => array(), 
			        'error' => '' 
			    ); 

			    $res2 = xrvel_curl2('http://www.google.com/trends/hottrends/widget?pn='.$country_code2.'&tn=20&h=413'); 

			    if ($res2 == '') { 
			        $result2['error'] = 'Failed. Empty response.'; 
			        return $result2; 
			    } 

			    if (!preg_match_all("/\<span class='widget-title-in-list'\>(.*)\<\/span\>\<\/span\>\<span class='widget-list-more-arrow/siU", $res2, $match2)) { 
			        $result2['error'] = 'Failed to parse.'; 
			        return $result2; 
			    } 

			    $keywords2 = $match2[1]; 

			    $result2['data'] = $keywords2; 
			    // return $result;
			    $category2 = implode(",",$result2['data']);

			    $combined_cat2 = explode(',', $category2);
			    echo '<h2>Argentina</h2><br />';
			    foreach ($combined_cat2 as $combined_cats2) {
			    	$seo_cat2 = str_replace(' ', '-', $combined_cats2);
			    	$seo_category2 = preg_replace('/[^A-Za-z0-9\-]/', '', $seo_cat2);
			        echo "<a href='/category/".$seo_category2."'>".$combined_cats2."</a><br />";
			    }
			    echo '<br /><div class="custom-hr"></div>';

			}

		?>

		<?php 

			$keyword3 = my_get_google_hot_trend3('p50'); 
			echo ''; print_r($keyword3['data']); 
			echo ''; 

			function xrvel_curl3($url3) { 
			    $ch3 = curl_init(); 
			    curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true); 
			    curl_setopt($ch3, CURLOPT_AUTOREFERER, true); 
			    curl_setopt($ch3, CURLOPT_HEADER, false); 
			    @curl_setopt($ch3, CURLOPT_FOLLOWLOCATION, true); 
			    @curl_setopt($ch3, CURLOPT_MAXREDIRS, 2); 
			    curl_setopt($ch3, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6'); 
			    curl_setopt($ch3, CURLOPT_SSL_VERIFYPEER, false); 
			    curl_setopt($ch3, CURLOPT_COOKIEJAR, dirname(__FILE__).'/cookie2.txt'); 
			    curl_setopt($ch3, CURLOPT_COOKIEFILE, dirname(__FILE__).'/cookie2.txt'); 
			    curl_setopt($ch3, CURLOPT_TIMEOUT, 40); 
			    curl_setopt($ch3, CURLOPT_URL, $url3); 
			    curl_setopt($ch3, CURLOPT_REFERER, $url3); 
			    $res3 = trim(curl_exec($ch3)); 
			    curl_close($ch3); 
			    unset($ch3); 
			    return $res3; 
			} 

			function my_get_google_hot_trend3($country_code3) { 
			    $result3 = array( 
			        'data' => array(), 
			        'error' => '' 
			    ); 

			    $res3 = xrvel_curl3('http://www.google.com/trends/hottrends/widget?pn='.$country_code3.'&tn=20&h=413'); 

			    if ($res3 == '') { 
			        $result3['error'] = 'Failed. Empty response.'; 
			        return $result3; 
			    } 

			    if (!preg_match_all("/\<span class='widget-title-in-list'\>(.*)\<\/span\>\<\/span\>\<span class='widget-list-more-arrow/siU", $res3, $match3)) { 
			        $result3['error'] = 'Failed to parse.'; 
			        return $result3; 
			    } 

			    $keywords3 = $match3[1]; 

			    $result3['data'] = $keywords3; 
			    // return $result;
			    $category3 = implode(",",$result3['data']);

			    $combined_cat3 = explode(',', $category3);
			    echo '<h2>Finland</h2><br />';
			    foreach ($combined_cat3 as $combined_cats3) {
			    	$seo_cat3 = str_replace(' ', '-', $combined_cats3);
			    	$seo_category3 = preg_replace('/[^A-Za-z0-9\-]/', '', $seo_cat3);
			        echo "<a href='/category/".$seo_category3."'>".$combined_cats3."</a><br />";
			    }
			    echo '<br /><div class="custom-hr"></div>';

			}

		?>

		<?php 

			$keyword4 = my_get_google_hot_trend4('p13'); 
			echo ''; print_r($keyword4['data']); 
			echo ''; 

			function xrvel_curl4($url4) { 
			    $ch4 = curl_init(); 
			    curl_setopt($ch4, CURLOPT_RETURNTRANSFER, true); 
			    curl_setopt($ch4, CURLOPT_AUTOREFERER, true); 
			    curl_setopt($ch4, CURLOPT_HEADER, false); 
			    @curl_setopt($ch4, CURLOPT_FOLLOWLOCATION, true); 
			    @curl_setopt($ch4, CURLOPT_MAXREDIRS, 2); 
			    curl_setopt($ch4, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6'); 
			    curl_setopt($ch4, CURLOPT_SSL_VERIFYPEER, false); 
			    curl_setopt($ch4, CURLOPT_COOKIEJAR, dirname(__FILE__).'/cookie2.txt'); 
			    curl_setopt($ch4, CURLOPT_COOKIEFILE, dirname(__FILE__).'/cookie2.txt'); 
			    curl_setopt($ch4, CURLOPT_TIMEOUT, 40); 
			    curl_setopt($ch4, CURLOPT_URL, $url4); 
			    curl_setopt($ch4, CURLOPT_REFERER, $url4); 
			    $res4 = trim(curl_exec($ch4)); 
			    curl_close($ch4); 
			    unset($ch4); 
			    return $res4; 
			} 

			function my_get_google_hot_trend4($country_code4) { 
			    $result4 = array( 
			        'data' => array(), 
			        'error' => '' 
			    ); 

			    $res4 = xrvel_curl4('http://www.google.com/trends/hottrends/widget?pn='.$country_code4.'&tn=20&h=413'); 

			    if ($res4 == '') { 
			        $result4['error'] = 'Failed. Empty response.'; 
			        return $result4; 
			    } 

			    if (!preg_match_all("/\<span class='widget-title-in-list'\>(.*)\<\/span\>\<\/span\>\<span class='widget-list-more-arrow/siU", $res4, $match4)) { 
			        $result4['error'] = 'Failed to parse.'; 
			        return $result4; 
			    } 

			    $keywords4 = $match4[1]; 

			    $result4['data'] = $keywords4; 
			    // return $result;
			    $category4 = implode(",",$result4['data']);

			    $combined_cat4 = explode(',', $category4);
			    echo '<h2>Canada</h2><br />';
			    foreach ($combined_cat4 as $combined_cats4) {
			    	$seo_cat4 = str_replace(' ', '-', $combined_cats4);
			    	$seo_category4 = preg_replace('/[^A-Za-z0-9\-]/', '', $seo_cat4);
			        echo "<a href='/category/".$seo_category4."'>".$combined_cats4."</a><br />";
			    }
			    echo '<br /><div class="custom-hr"></div>';

			}

		?>

	</div>

</div>
<!-- END OF CONTENT HERE -->
<?php
	require_once('footer.php'); ?>