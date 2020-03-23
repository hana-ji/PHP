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
    basic();
    basic();
  ?>
  <h2>parameter &amp; argument</h2>
  <?php
  // sum: ($legt, $right)에 입력값을 들어온 값을 더한다, print 더한 값을 출력한다 
    function sum($left, $right){
      print($left+$right);
      print("<br>");
      // 출력한다 라는 기능이 내장되있어서 쓸모 적음
    }
      sum(2,4);
  ?>
  <!-- 함수의 출력값: return -->
  <h2>return</h2>
  <?php
    // 동작한 결과를 리턴(출력)하기 때문에 다양한 용도로 사용 가능
    function sum2($left, $right){
      return $left+$right;
    }
    // 실행 시 2+4 를 더한 결과인 6이 되는 표현식
    print(sum2(2,4));
  ?>
</body>
</html>