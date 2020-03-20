<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Array</title>
</head>
<body>
  <h1>Array</h1>
  <?php 
  // 4개의 문자열을 담고있는 배열의 표현식
    $coworkers =array('hana','hee','won','lee');
    // ㄴ담기 꺼내기ㄱ
    echo $coworkers[1].'<br>';
    echo $coworkers[2].'<br>';
    echo $coworkers[3].'<br>';
    var_dump(count($coworkers));
    // 배열 추가
    array_push($coworkers, 'hanazzang');
    var_dump($coworkers);
  ?>
</body>
</html>