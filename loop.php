<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Loop</title>
</head>
<body>
  <h1>while</h1>
  <?php 
    echo '1<br>';
    // while(true){ 
    //   echo '2<br>';
    // }    = 무한루프됨 ==> true가 적당히 참 거짓이 되게 해야함
    // i = 0 이라는 변수 설정
    $i = 0;
    while($i < 3){
      echo '2<br>';
      // 반복문이 실행될 때 마다 i의 값이 1씩 증가
      $i = $i + 1; 
    }
    echo '3<br>';
  ?>
</body>
</html>