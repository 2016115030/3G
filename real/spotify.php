<?php
$db_host = "localhost";
$db_id = "root";
$db_password = "2016115030";
$db_name = "spotify";

$connect = mysqli_connect($db_host, $db_id, $db_password, $db_name);

$query = "select * from top_gl_100920 LIMIT 6";

if ($result = mysqli_query($connect, $query, MYSQLI_USE_RESULT)) {
    $o = array();
    // (*) stdClass() 대신에 빈 class
    Class getData{
        public $position;
        public $track_name;
        public $artist;
        public $streams;
        public $url;
    };
    while ( $row = mysqli_fetch_object($result)) {
        // (*) $t = new stdClass(); //익명의 PHP Class
        $t = new getData(); 
        $t->position = $row->Position;
        $t->track_name = $row->Track_Name;
        $t->artist = $row->Artist;
        $t->streams = $row->Streams;
        $t->url = $row->URL;
        $o[] = $t;
        unset($t);
    }
} else {
    $o = array(0 => 'empty');
}

//var_dump($o);
echo json_encode($o);
?>