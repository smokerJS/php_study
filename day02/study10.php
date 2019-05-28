<?

  for($i = 0 ; $i < 100 ; $i++) {
    if($i % 2 == 0) continue;
    if($i == 11) break;
    echo "$i <br/>";
  }
  $i = 10;
  while(true) { // while문의 조건으로 true 또는 1을 선언할 시 무한반복을 하게된다.
    $i--;
    if($i == 0) break;
    if($i % 2 == 0) continue;
    echo "$i <br/>";
  }
  echo "end <br/>";

  /*
    반복문 continue, break 명령
    일정 조건일때 continue를 선언하면 밑의 코드를 실행하지 않고 바로 다음 해당 루프를 건너 뛴 다음 다음 루프를 실행한다.
    break를 선언하면 반복문을 더이상 반복하지 않고 탈출한다.
  */
?>