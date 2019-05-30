<?
  $score = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
  );


  for($i = 0; $i < count($score) ; $i++) {
    for($j = 0; $j < count($score[$i]) ; $j++) {
      echo $score[$i][$j]."<br/>";
    }
  }

  /*
    2차원 배열 선언
    array함수를 사용하여 value에 다시 array 함수를 선언하여 2차원 배열을 만들 수 있다.
  */
?>