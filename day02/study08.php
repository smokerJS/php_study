<?
  for($i = 1 ; $i <= 9 ; $i++) {
    echo "<ul>";
    for($j = 2 ; $j <= 9 ; $j++) {
      $result = $i*$j;
      echo "<li>$i * $j = $result</li>";
    }
    echo "</ul>";
  }
  /*
    반복문 다중 for
    for문 내부에 다시 한번 for문을 선언하여 반복문을 다중으로 실행한다.
  */
?>