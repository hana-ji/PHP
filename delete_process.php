<?php
// 아이디 값이 파일명만 들어갈수 있도록 하면 좀 더 안전해
  unlink('data/'.basename($_POST['id']));
  // 삭제했으니까 홈으로가야죠 !!
  header('Location: /index.php');
?>