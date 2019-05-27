<?
  // 연산자 - 평균 구하기 (나누기)
  $kor = 85;
  $eng = 90;
  $math = 98;
  $soc = 80;
  $sci = 90;
  $sum = $kor + $eng + $math + $soc + $sci;
  $avg = $sum / 5;
  $int_avg = intval($avg);
  echo "5과목 합산점수 : $sum<br/>";
  echo "5과목 평균점수 : $avg<br/>";
  echo "정수형 평균점수 : $int_avg<br/>";
  /*
    1. 나누기 연산은 / 을 사용한다.
    2. 정수형(Integer)으로 표현하기 위해서는 intval 함수를 이용한다.
  */
?>

