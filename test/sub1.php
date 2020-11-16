<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="sub1.css">
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

        <div class = "main_logo">Logo Location</div>

        <div class = "main_menu">
          chart &nbsp;&nbsp;&nbsp;
          chart &nbsp;&nbsp;&nbsp;
          chart &nbsp;&nbsp;&nbsp;
          chart &nbsp;&nbsp;&nbsp;
          chart
        </div>

      </div>

      <!--서브 컨텐츠 테이블 -->
      <div id = "sub1_content">

			<!-- table include -->
				<?php
					include("table.php");
				?>

      </div>

    </div>

		<div id = "sub1_content_right">

			<div class = "sub1_content_right_box"> img </div>
			<div class = "sub1_content_right_text"> 1234 </div>
		</div>

  </div>

</body>
</html>
