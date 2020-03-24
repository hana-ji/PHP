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
  <!-- isset : 인자로 들어오는 값이 있는지 없는지 체크 -->
  <?php if(isset($_GET['id'])) { ?>
    <!-- if문과 {} 사이에있는 update는 id값이 set(존재)해야지만 출력됨 -->
    <!-- ㄴ 수정하려면 수정하려는 내용이 뭔 지 알아야 함
            (= 현재 우리가 보고있는 페이지에 대한 id값을 물고들어가야함) -->
    <!-- echo를 써야하는 경우  -->
    <!-- <a href="update.php?id=<?php echo $_GET['id']; ?>">update</a> -->
    <!-- 이렇게 바꾸면 더 깔끔함 -->
    <a href="update.php?id=<?=$_GET['id']?>">update</a>
  <?php } ?>
  <h2>
    <?php
      print_title();
    ?>
  </h2>
  <?php 
    print_description();
  ?>
<!-- 수정할 때 폼 필요 -->
  <form action="update_process.php" method="post">
    <!-- hidden: 사용자에게는 노출 x, submit 버튼 눌렀을 때 액션이 가르키는 애플리케이션으로 어떤 데이터를 전송하고 싶을 때 -->
    <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
    <!--  -->
    <p>
      <!-- 수정 할 내용이 폼에 채워져 있어야함 -> value(:기본값 설정해주는 애)로 값 설정 -->
      <!-- 서버에 data 전송 할 때 title이라는 name으로 전달 -> title은 수정될 파일 명, 이전 파일명에 대한 정보를 따로 서버에 보내주면 됨 -->
      <input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>">
    </p>
    <p>
      <textarea name="description" placeholder="Description"><?php print_description(); ?></textarea>
    </p>
    <p>
      <input type="submit">
    </p>
  </form>
</body>
</html>