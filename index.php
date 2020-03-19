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
    /* file_get_contents라는 함수를 통해서 id값으로 들어오는 값으로 프로그래밍 적으로 php를 통해서 경로로 전환해준 다음에 그것을 file_get_contents에 입력값으로 전해주면
    그 입력값으로 들어온 경로에 해당되는 파일을 찾아서 표현해주는 표현식이다 */
  ?>
    
</body>
</html>