<!-- URL을 통해서 title이라는 값이 PHP다. 라는 URL parameter가 넘어옴 -->
<?php 
// 파일 저장할때 사용하는 함수
file_put_contents('data/'.$_POST['title'], $_POST['description']);
// parameter 받기
  // echo "<p>title : ".$_GET['title']."</p>";
  // echo "<p>description : ".$_GET['description']."</p>";
?>