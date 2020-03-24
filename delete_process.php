<?php
  unlink('data/'.$_POST['id']);
  // 삭제했으니까 홈으로!
  header('Location: /index.php');
?>