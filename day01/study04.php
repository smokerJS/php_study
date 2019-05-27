<?
  // 상수선언
  define("NUMBER_ONE", 1);
  define("NUMBER_TWO", 2);
  echo NUMBER_ONE;
  echo "<br/>";
  echo NUMBER_TWO;
  echo "<br/>";
  define("NUMBER_ONE", 3);
  echo NUMBER_ONE;
  /*
    1. 상수 선언은 define 함수를 이용한다.
    2. 이미 상수로 정의가 되면 값을 바꿀 수 없다.
    3. 상수는 가독성을 위하여 모두 대문자로 표기한다.
  */
?>

