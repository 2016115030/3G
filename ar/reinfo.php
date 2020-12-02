<?php



/*-------------------------------------------

          DATABASE CONNECTION
  
-----------------------------------------------*/


$connect = mysqli_connect('localhost', 'root', '2016115030', 'spotify');

if (!empty($connect) || isset($connect)) {

    // sql
    $sql = "SELECT * FROM top_gl_100920 LIMIT 6";

    $res = mysqli_query($connect, $sql);





    


/*-------------------------------------------

            API CONNECTION
  
-----------------------------------------------*/


// basic
$apikey = "2a83bf423ea1f964b8c430dca20805dc";
$apiArtist = "";
$apiTrack = "";

?>






<!DOCTYPE html>
<html>
<head>
	<title>Lumens project - 3G</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
  <div id = "main_web">
    <!-- 좌측 -->
    <aside id = "main_left">
      <!-- icon top -->
      <div id = "main_top_icon">

        <div class = "main_icon">
					<img src = "img_icon/home.png" width="40" height="40">
				</div>

        <div class = "main_icon">
					<img src = "img_icon/search.png" width="40" height="40">
				</div>

        <div class = "main_icon">
					<img src = "img_icon/books.png" width="40" height="40">
				</div>

        <div class = "main_icon">
					<img src = "img_icon/compass.png" width="40" height="40">
				</div>

      </div>

      <!-- icon bottom -->
      <div id = "main_bottom_icon">

        <div class = "main_icon">
					<img src = "img_icon/plus.png" width="40" height="40">
				</div>

        <div class = "main_icon">
					<img src = "img_icon/setting.png" width="40" height="40">
				</div>

        <div class = "main_icon">

				</div>

      </div>

    </aside>

    <!-- 우측 -->
    <div id = "main_right">

      <!--상단 바-->
      <div id = "main_top">

        <div class = "main_logo">F e a t u r e d </div>

        <div class = "main_menu">
          chart &nbsp;&nbsp;&nbsp;
          chart &nbsp;&nbsp;&nbsp;
          chart &nbsp;&nbsp;&nbsp;
          chart &nbsp;&nbsp;&nbsp;
          chart
        </div>

      </div>

      <!--메인 컨텐츠-->
      <div id = "main_content">

        <!-- section 1 -->
        <section id = "main_cont_1">

          <div class = "main_text_1">My Feature ></div>

          <div class = main_cont_box1> 1 </div>
          <div class = main_cont_box2> 2 </div>
          <div class = main_cont_box3> 3 </div>

        </section>

        <!-- section 2 -->
        <section id = "main_cont_2">

          <div class = "main_text_2">Based on your activity ></div>

<?php

/* ------------------------------------------------------------------------------
//////////////////////////////// db code start ////////////////////////////////
------------------------------------------------------------------------------ */


while ($row = mysqli_fetch_array($res)) {
  
  $Position = $row['Position'];
  
  $Track_Name = $row['Track_Name'];
      $mod_Track_Name = strstr($Track_Name, '(');
      $track = str_replace($mod_Track_Name, '', $Track_Name); 

  $artist = $row['Artist'];



  
/* ------------------------------------------------------------------------------
//////////////////////////////// api code start ////////////////////////////////
------------------------------------------------------------------------------ */

$apiArtist = $artist;
$apiArtist = strtolower($apiArtist);
$apiArtist = trim($apiArtist);
$apiArtist = str_replace(" ", "%20", $apiArtist);


$apiTrack = $track;
$apiTrack = strtolower($apiTrack);
$apiTrack = trim($apiTrack);
$apiTrack = str_replace(" ", "%20", $apiTrack);

$cover = "";

// API url: Last.fm  -  track.getInfo
$url = "https://ws.audioscrobbler.com/2.0/?method=album.getinfo&api_key=" . $apikey . "&artist=" . $apiArtist . "&album=" . $apiTrack . "&format=json";

$content = file_get_contents($url);
$json = json_decode($content, true);

$cover = $json['album']['image'][2]['#text'];

// if image is not exist ... !! paste img !!
if ($cover == "") {
  
  $cover = "";
}

/* ------------------------------------------------------------------------------
//////////////////////////////// api code end ////////////////////////////////
------------------------------------------------------------------------------ */


            // db->api--> html 
            echo '
                  <div class = "main_out_box">
                    <div class="main_inner_box">    
                      <div class = "cover"><img src="' . $cover . '" alt="' . $track . '-' . $artist . '"></div>
                    </div>
                    <div class="main_inner_text">
                      <div class="main_inner_title">
                        <p class="title">' . $track . '</p>
                      </div>
                      <div class="main_inner_artist">
                        <p class="artist">' . $artist . '</p>
                      </div>
                    </div>
                  </div>
                 ';
            

?>
</body>

<?php
        }
      }
?>  
</html>
