<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1><a href="index.php">WEB</a></h1>
  <ol>
    <li><a href="index.php?id=HTML">HTML</a></li>
    <li><a href="index.php?id=CSS">CSS</a></li>
    <li><a href="index.php?id=JavaScript">JavaScript</a></li>
  </ol>
  <h2>
    <!-- 만약에 id값이 있다면
          echo $_GET['id']; 를 실행시키고
         없다면
          echo "Welcome"; 을 실행시킨다 -->
    <?php
    // $_GET[id]의 값이 isset(있다면) true가 됨 값이 없다면 if의 값이 false가 되서 else에 있는 부분이 출력됨
    if(isset($_GET['id'])){
      echo $_GET['id'];
    } else {
      echo "Wellcome";
    }
    ?>
  </h2>
  <?php 
  // $_GET['id'가 있다면(true)
  if(isset($_GET['id'])){
    // 여기가 실행될것이고
    echo file_get_contents("data/".$_GET['id']);
    // 없다면(false)
  } else {
    // 여기가 실행될것이다
    echo "Hello, PHP";
  }
  ?>
    
</body>
</html>