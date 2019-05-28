<?
  $num = 2;
  $result = "몰라";

  if($num%2==1) { // if(조건) { 조건이 맞을때 실행명령 }
    $result = "홀수";
  }else {  // else { 위의 모든 조건이 일치하지 않을 때 실행명령 }
    $result = "짝수";
  }
  echo "$num : $result 입니다.";

  if(false) echo "<br/>if(false)<br/>";
  else echo "<br/>else<br/>"; //  else 명령이 한줄이면 {} 스코프(scope)를 선언할 필요 없음
?>