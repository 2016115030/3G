<?php 

// /* Spotify Application Client ID and Secret Key */
// $client_id     = 'e564414635784bd5983214568eea71c8'; 
// $client_secret = '65fd69c88c4c4a4cbfbe8669437af883'; 

// $url = "https://api.spotify.com/v1/search?q=ADELE+HELLO&type=track,artist";

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:x.x.x) Gecko/20041107 Firefox/x.x");
// $output = curl_exec($ch);
// curl_close($ch);

// $get_json  = json_decode($output);
// $cover     = $get_json->tracks->items[0]->album->images[0];
// echo $cover; 


$apikey = "2a83bf423ea1f964b8c430dca20805dc";
$apiArtist = "";
$apiTrack = "";


$url = "https://ws.audioscrobbler.com/2.0/?method=track.getInfo&api_key=" . $apikey . "&artist=" . $apiArtist . "&track=" . $apiTrack . "&format=json";
$url2 = "https://ws.audioscrobbler.com/2.0/?method=album.getinfo&api_key=2a83bf423ea1f964b8c430dca20805dc&artist=24kgoldn&album=mood&format=json";

// echo $url2; 
$content = file_get_contents($url2);

$data = str_ireplace("#text", "text", $url2);
$json = json_decode($url2);



  $cover = $json['album']['name'];
  echo $cover;
  echo 'why';


?>