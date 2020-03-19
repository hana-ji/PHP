<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>WEB</h1>
  <ol>
    <li><a href="index.php?id=HTML">HTML</a></li>
    <li><a href="index.php?id=CSS">CSS</a></li>
    <li><a href="index.php?id=JavaScript">JavaScript</a></li>
  </ol>
  <!-- url에 아이디 값에 따라 현재 페이지의 제목 정하기 -->
  <h2>
    <?php 
      echo $_GET['id'];
    ?>
  </h2>
  <?php 
    // echo data/id 값에 해당하는 파일의 내용;
    echo file_get_contents("data/".$_GET['id']);
  ?>
    
</body>
</html>