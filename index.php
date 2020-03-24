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
          if($list[$i] != '.DS_Store'){
          echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
          }
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
  <a href="create.php">create</a>
  <?php if(isset($_GET['id'])) { ?>
    <a href="update.php?id=<?=$_GET['id']?>">update</a>
    <!-- link를 클릭하자 데이터가 삭제되면 ex) 친구한테 삭제링크 공유하면 친구가 그 링크 클릭하자마자 데이터가 삭제됨 -->
    <form action="delete_process.php" method="post">
      <input type="hidden" name="id" value="<?=$_GET['id']?>">
      <input type="submit" value="delete">
    </form>
  <?php } ?>
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