<?
  $score = 78;
  $result;
  switch (true) {
    case $score >= 90:  // 조건
      $result = "A";    // 명령
      break;            // 탈출
    case $score >= 80:
      $result = "B";
      break;
    case $score >= 70:
      $result = "C";
      break;
    case $score >= 60:
      $result = "D";
      break;
    default:
      $result = "F";
      break;
  }

  echo "$score : $result 입니다.";
  /*
    switch
    다중 if명령을 switch로 표현할 수 있다.
    case 에 조건을 걸고 명령을 작성한다.
    명령은 다중으로 작성이 가능하며 구문마다 ;(세미콜론)을 붙인다.
    break 로 탈출을 시키지 않으면 밑의 명령까지 실행한다.
    default는 else와 같이 위의 조건이 모두 거짓일 때 무조건 실행한다.
  */
?>