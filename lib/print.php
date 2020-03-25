<?php 
  function print_title (){
    if(isset($_GET['id'])){
      // 사용자가 변조 할 수 있는 정보 보안
      echo htmlspecialchars($_GET['id']);
    } else {
      echo "Wellcome";
    }
  }
  function print_description(){
    if(isset($_GET['id'])){
//    경로 타고 와서 유출 할수 있기때문에 파일 명만 보이게 함
      $basename = basename($_GET['id']);
//    본문을 htmlspecialchars로 해버리면 이미지 태그나 줄바꿈 태그 등을 못할 수 있음 -> strip_tags 알아보기
      echo htmlspecialchars(file_get_contents("data/".$basename ));
    } else {
      echo "Hello, PHP";
    }
  }
  function print_list(){
    $list = scandir('./data');
    $i = 0;
    while($i < count($list)){
      $title = htmlspecialchars($list[$i]);
      if($list[$i] != '.'){
        if($list[$i] != '..'){
          if($list[$i] != '.DS_Store'){
                                          //이 부분이 변조 가능할 수 있어서 위에 변수에 보안 처리함
          echo "<li><a href=\"index.php?id=$title\">$list[$i]</a></li>\n";
          }
        }  
      }
      $i = $i + 1 ;
    }
  }
?>