<?
  $score = 78;
  $result;
  if($score >= 90) $result = "A";     // if(조건) 실행문
  elseif($score >= 80) $result = "B"; // elseif(조건) 위까지의 조건이 거짓일 경우 조건의 참 거짓을 확인한 뒤 실행
  elseif($score >= 70) $result = "C";
  elseif($score >= 60) $result = "D";
  else $result = "F"; // 위의 조건들이 전부 거짓일때 무조건 실행
  echo "$score : $result 입니다.";
  /*
    다중 if
    elseif 또는 else if(중간 띄어쓰기) 로 선언
    보통 elseif 붙여서 선언
    위까지의 조건이 거짓일 경우 elseif(조건) 조건의 참 거짓을 구분하고 참일경우 실행
  */
?>