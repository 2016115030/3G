<?php

// $connect = mysqli_connect('localhost', 'root', '2016115030', 'spotify');

// if (!empty($connect) || isset($connect)) {

//     // sql
//     $sql = "SELECT * FROM top_gl_100920 LIMIT 6";

//     $res = mysqli_query($connect, $sql);

//     if(!empty($res) || $res == true) {
//         while ($row = mysqli_fetch_array($res)) {
            
//             $Position = $row['Position'];
            
//             $Track_Name = $row['Track_Name'];
//                 $mod_Track_Name = strstr($Track_Name, '(');
//                 $title = str_replace($mod_Track_Name, '', $Track_Name); 

//             $artist = $row['Artist'];

//             echo "[$Position] $Track_Name : $artist <br>";
            
//         }
//     }
// }


phpinfo();
?>