<!-- 인과관계가 항상 드러나야함 
php에서는 한번 정의된 함수는 다시 재정의 할수 없게 되있는데
이렇게 하면 두번 인식하게됨 -->
<?php 
  // require('lib/print.php'); 리콰이어 원스를 사용해서 한번만 로드되게함.
  require_once('lib/print.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>
    <?php
    // 프린트 타이틀이 어디서 왔는가아 ~?
      print_title();
    ?>
  </title>
</head>
<body>
  <h1><a href="index.php">WEB</a></h1>
  <ol>
    <?php 
      print_list();
    ?>
  </ol>