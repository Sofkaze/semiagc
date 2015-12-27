<?php 

    $query = 'shipping container home floor plans';

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
    // foreach( $response->d->results as $result ) 
    // {
    //     if (isset($result)) {
            
    //         $file = $result->Title;
    //         $file2 = $result->Width;
    //         $file3 = $result->Height;
    //         $file4 = $result->FileSize;
    //         $file5 = $result->ContentType;
    //         $file6 = $result->MediaUrl;
            
    //     }
    // }
    
?>