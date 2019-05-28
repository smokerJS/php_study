<?
  $num = 2;
  $result = "홀수";
  if($num%2==0) { // if(조건) { 조건이 맞을때 실행명령 }
    $reuslt = "짝수";
  }
  echo "$num : $result 입니다.";

  if(true) echo "<br/>test<br/>"; //  조건문이 한줄이면 {} 스코프(scope)를 선언할 필요 없음
?>