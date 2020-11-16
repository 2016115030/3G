<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="master.css">
    
    <title>music-api_testing</title>
</head>
<body>

<?php
    $connect = mysqli_connect('localhost', 'root', '1234', 'spotify');

    if (!empty($connect) || isset($connect)) {
        $sql = "SELECT * FROM top_gl_100920";

        $res = mysqli_query($connect, $sql);

        if(!empty($res) || $res == true) {
            while ($row = mysqli_fetch_array($res)) {
                $Track_Name = $row['Track_Name'];
                    $mod_Track_Name = strstr($Track_Name, '(');
                    $title = str_replace($mod_Track_Name, '', $Track_Name);
                $artist = $row['Artist']
                
?>
    <div class="all-wrap">
        <div class="song">
            <div class="cover-wrap">
                <div class="cover">//album cover//</div>
            </div>
            <div class="song-info">
                <div class="title-wrap">
                    <p class="title"><?= $title ?></p>
                </div>
                <div class="artist-wrap">
                    <p class="artist"><?= $artist ?></p>
                </div>
                <div class="album-wrap">
                    <p class="album">Believe</p>
                </div>
            </div>
        </div>
    </div>
<?php
            }
        }
    }
?>
</body>
</html>