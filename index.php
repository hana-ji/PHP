<!-- 가독성 높아짐, 코드에서 개선이나 변경사항 있을 때 print_title을 호출하고 있는 모든 호출에서 동시에 적용됨 -->
<?php 
  function print_title (){
    if(isset($_GET['id'])){
      echo $_GET['id'];
    } else {
      echo "Wellcome";
    }
  }
  function print_description(){
    if(isset($_GET['id'])){
      echo file_get_contents("data/".$_GET['id']);
    } else {
      echo "Hello, PHP";
    }
  }
  function print_list(){
    $list = scandir('./data');
      $i = 0;
      while($i < count($list)){
        if($list[$i] != '.'){
          if($list[$i] != '..'){
        echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
        }
      }
        $i = $i + 1 ;
      }
  }
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>
    <?php
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
  <h2>
    <?php
      print_title();
    ?>
  </h2>
  <?php 
    print_description();
  ?>
</body>
</html>