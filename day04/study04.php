<?
  $score = array(1,2,3,"a"=>4,"b"=>5);


  for($i = 0; $i < count($score) ; $i++) {
    echo $score[$i]."<br/>";
  }
  echo $score["a"]."<br/>";
  echo $score["b"]."<br/>";

  /*
    배열 key선언
    key => value 형식으로 직접 key를 선언한다.
  */
?>