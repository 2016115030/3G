<?php
echo "MySql 연결 테스트<br>";
 
$db = mysqli_connect("localhost", "root", "1234", "world");
 
if($db){
    echo "connect : 성공<br>";
}
else{
    echo "disconnect : 실패<br>";
}
 
$result = mysqli_query($db, 'SELECT VERSION() as VERSION');
$data = mysqli_fetch_assoc($result);
echo $data['VERSION'];
?>
