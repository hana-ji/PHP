<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1><a href="index.php">WEB</a></h1>
  <ol>
    <?php 
      $list = scandir('./data');
      // scandir을 사용하니 ., .., css 이런순으로 오는데 0 1 2 이런 순이라서 $i 의 값을 2로 시작해도 . .. 은 안보이는데 항상 . .. 으로 온다는 보장이 없음
      $i = 0;
      // 데이터 디렉토리 안의 파일의 숫자만큼 반복문이 실행 
      while($i < count($list)){
        // 현재 실행되고 있는 순서에 따른 항목 $list[$i]
        if($list[$i] != '.'){             /* 양쪽 항이 다를 때 참이 됨 */
          if($list[$i] != '..'){
        echo "<li><a href=\"idnex.php?id=$list[$i]\">$list[$i]</a></li>\n";
        }
      }
        $i = $i + 1 ;
      }

    ?>
  </ol>  
  <h2>
    <?php
    if(isset($_GET['id'])){
      echo $_GET['id'];
    } else {
      echo "Wellcome";
    }
    ?>
  </h2>
  <?php 
  if(isset($_GET['id'])){
    echo file_get_contents("data/".$_GET['id']);
  } else {
    echo "Hello, PHP";
  }
  ?>
    
</body>
</html>