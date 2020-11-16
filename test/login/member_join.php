<?php

  $id = $_REQUEST["id"];
  $pw = $_REQUEST["pw"];
  $name = $_REQUEST["name"];

  $conn = mysqli_connect( 'localhost', 'root', '2014133054', 'member' );
  $sql = "insert into member values ('$id', '$pw', '$name')";

  $result = mysqli_query($conn , $sql);

  if($result){
?>
  <script>
    alert("회원가입 성공! 로그인 페이지로 이동합니다.");
    window.close();
  </script>

<?php
  } else {
?>

<script>
  alert("빈칸 없이 입력해야합니다.");
  history.back();
</script>

<?php
  }
?>
