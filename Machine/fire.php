<?php 
    
    require_once('../Config/Database.php');

    $readDB = mysqli_query($connecDB, "SELECT * FROM keyword WHERE status = 0 ORDER BY id DESC LIMIT 1")or die(mysqli_error());
    $x = mysqli_fetch_array($readDB);

    $query = $x['keyword'];

    $newout=str_replace(" ", ",", $query);

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
        $string = str_replace(' ', '-', $string);
        return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
    }


    foreach( $response->d->results as $result ) 
    {
        if (isset($result)) {
            
            $actualTitle = $result->Title." ".$result->Width."x".$result->Height;
            $title = preg_replace('/[^A-Za-z0-9\-]/', ' ', $actualTitle);
            $width = $result->Width;
            $height = $result->Height;
            $filesize = $result->FileSize;
            $type = $result->ContentType;
            $image = $result->MediaUrl;
            $slug = clean($result->Title);
            // record to database

            mysqli_query($connecDB, "INSERT INTO data_post (title, slug, width, height, size, img_url, tags, page_view, time) VALUES ('$title','$slug','$width','$height','$filesize','$image','$newout',0,NOW())")or die(mysql_error());

        }
    }
    $getID = $x['id'];
    mysqli_query($connecDB, "UPDATE keyword SET status = 1 WHERE id = '$getID' ")or die(mysql_error());