<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>functions</title>
</head>
<body>
  <h1>Function</h1>
  <h2>Basic</h2>
  <?php 
    function basic(){
      print("agljmlgbjkasbdgjabsdgsd1<br>");
      print("agljmlgbjkasbdgjabsdgsd2<br>");
    }
    // ()안에 입력값을 주면 입력값을 받아 내부적으로 다르게 동작하게 할수 있음
    basic();
    basic();
  ?>
  <h2>parameter &amp; argument</h2>
  <?php
  // sum이라는 함수를 만듬, 그 함수의 입력값은 $left, $right 라고 하는 두개의 값이 올수있음
  // $left, $right = parameter(매개변수)
  function sum($left, $right){
    print($left+$right);
  }
  // 입력값을 뭘 주냐에 따라 다르게 동작
  // 2,4 = argument
    sum(2,4);
  ?>
</body>
</html>