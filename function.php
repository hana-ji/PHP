<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>function</title>
</head>
<body>
  <h1>function</h1>
  <?php 
    $str = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum alias aspernatur recusandae? Eligendi corporis accusamus saepe, consequatur eos sunt, quas illum alias de
    lectus reiciendis omnis est dignissimos, animi necessitatibus voluptatem.";
    echo $str;
    ?>
  <h2>strlen()</h2>
  <?php 
    // 괄호 안에 있는 입력값을 내부적으로 계산 후 결과를 자기자신으로 교체하는 표현식
    echo strlen($str);
  ?>
  <h2>nl2br</h2>
  <?php 
    echo nl2br($str);
  ?>
</body>
</html>