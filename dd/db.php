<?php 

header("Content-Type:application/json");

$db_host = "localhost";
$db_id = "root";
$db_password = "2016115030";
$db_name = "spotify";

$connect = mysqli_connect('localhost', 'root', '2016115030', 'spotify');

$query = "select * from top_gl_100920 LIMIT 6";

if ($result = mysqli_query($connect, $query, MYSQLI_USE_RESULT)) {
    $o = array();
    while ( $row = mysqli_fetch_object($result)) {
        $t = new stdClass();
        $t->Position = $row->Position;
        $t->Track_Name = $row->Track_Name;
        $t->Artist = $row->Artist;
        $t->Streams = $row->Streams;
        $t->URL = $row->URL;
        $o[] = $t;
        unset($t);
    }
} else {
    $o = array(0 => 'empty');
}

echo json_encode($o);



// if (! $result) {
// 	$message = 'Invalid query: ' . mysql_error () . "\n";
// 	$message .= 'Whole query: ' . $query;
// 	die ( $message );
// }

// // make json from database result set
// $resultArray = array ();
// while ( $row = mysqli_fetch_assoc ( $result ) ) {
// 	$arrayMiddle = array (
//             "Position" => (int) $row ['Position'] ,
// 			"Track_Name" => urlencode( $row ['Track_Name'] ),
// 			"Artist" => urlencode( $row ['Artist'] ),
//             "Streams" => (int) $row ['Streams'] ,			
//             "URL" => urlencode( $row ['URL'] ),
// 	);
	
// 	array_push ( $resultArray, $arrayMiddle );
// }

// // print result array 
// print_r ( urldecode ( json_encode ( $resultArray ) ) );

// // close db
// mysqli_close ( $connect );
//


        
?>