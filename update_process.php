<?php 
// hideen태그의 name=old_title로 oldname받고 파일명 바꿈
  rename('data/'.$_POST['old_title'], 'data/'.$_POST['title']);
  file_put_contents('data/'.$_POST['title'], $_POST['description']);
  header('Location: /index.php?id='.$_POST['title']);
?>