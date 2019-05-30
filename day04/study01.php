<?
  echo "<h1>배열 Array</h1>";

  $num1 = 20;
  $num2 = 70;
  $num3 = 30;
  $num4 = 10;
  echo "$num1 $num2 $num3 $num4 <br/>";

  $numbers[0] = 20;
  $numbers[1] = 70;
  $numbers[2] = 30;
  $numbers[3] = 10;

  for($i = 0 ; $i < 4 ; $i++) echo $numbers[$i]."<br/>";

  /*
    PHP에서 배열의 선언은 $변수명[공간] = 값; 의 형식으로 선언한다.
    공간은 0부터 시작한다.
  */
?>