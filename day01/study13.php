<?
  // 연산자 - 논리연산자
  $num = 10;
  echo !($num == 10); // ! NOT 연산자 값이 true면 false를 반환
  echo "<br/>";
  echo !($num == 11); // 값이 false면 true를 반환
  echo "<br/>";
  echo ($num == 10) && ($num == 10); // && AND 연산자 앞 뒤의 조건이 모두 참이면 true를 반환
  echo "<br/>";
  echo ($num == 10) && ($num == 11); // 한개의 조건이라도 거짓이면 false를 반환
  echo "<br/>";
  echo ($num == 10) || ($num == 11); // || OR 연산자 앞 뒤의 조건 중 한개라도 참이면 true를 반환
  echo "<br/>";
  echo ($num == 11) || ($num == 11); // 조건이 모두 거짓이면 false를 반환
?>

