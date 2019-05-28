<?
  do {  // 명령 선언
    echo "<h1>do while loop</h1>";
  }while(false); // 조건 선언

  $i = 0;
  do {
    if($i == 10) break;
    echo "$i <br/>";
    $i++;
  }while(true);

  /*
    반복문 do while
    일반 while과 다르게 명령을 먼저 선언, 실행한다.
    while에 선언된 조건의 참 거짓을 구분한 뒤 다시 do에 선언한 명령을 실행할지 결정한다.
    while의 조건이 거짓이더라도 무조건 1회는 명령을 실행하는 반복문이다.
  */
?>