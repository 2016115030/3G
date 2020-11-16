<?php
  $id = $_REQUEST["id"];
  $pw = $_REQUEST["pw"];

  $conn = mysqli_connect('localhost', 'root', '2014133054', 'member');
  $sql = "select * from member where id = '$id' and pw = '$pw'";

  $result = mysqli_query( $conn, $sql );

  if($row = mysqli_fetch_array($result)){
?>
  <script>
    alert("로그인 성공! 메인 페이지로 이동합니다.");
    window.location = '../main.html';
  </script>

<?php
  } else {
?>

  <script>
    alert("아이디 또는 비밀번호를 확인하세요");
    history.back();
  </script>

<?php
  }
?>
