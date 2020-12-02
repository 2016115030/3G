<?php

/* -----------------------
     track.getInfo API
 ----------------------- */


    $apiKey = "2a83bf423ea1f964b8c430dca20805dc";
    $url = 'https://ws.audioscrobbler.com/2.0/?method=album.getinfo&api_key=2a83bf423ea1f964b8c430dca20805dc&artist=24kgoldn&album=mood&format=json';
    $content = file_get_contents($url);
    $json = json_decode($content, true);

    echo $json['album']['name'];
    echo $json['album']['image'][0]['#text'];


    // foreach($json['artist'] as $item) {
    //     print $item['name'];
    //     print '<br>';
    
    //     for ($i=0; $i < count($item['image']); $i++) { 
    //         echo $item['image'][$i]['#text']."<br>";
    //     }
    // }

?>