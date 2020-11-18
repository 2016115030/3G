<?php

/* -----------------------
     track.getInfo API
 ----------------------- */


    $apiKey = "2a83bf423ea1f964b8c430dca20805dc";
    $artist = "cher";
    $track = "believe";

    $url = "https://ws.audioscrobbler.com/2.0/?method=track.getInfo&api_key=" . $apikey .
    "&artist=" . $artist . "&track=" . $track . "&format=json";
    
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    // curl_setopt($ch, CURLOPT_URL, $endpoint);
    // curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    // curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0); // 0 for indefinite
    // curl_setopt($ch, CURLOPT_TIMEOUT, 10); // 10 second attempt before timing out
    // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));
    // $response = curl_exec($ch);
    // $lastfm[] = json_decode($response, true);


    curl_close($ch);
    $data = json_decode($response);
    $currentTime = time();
    
    echo $data->$track->$name;

?>