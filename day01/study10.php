<?
  // 연산자 - 증감연산자 ++ --
  $num = 1;
  echo ++$num."<br/>"; // 숫자 앞에 ++를 붙이면 1을 증가시킨 뒤 값을 사용한다. 2
  echo $num++."<br/>"; // 숫자 뒤에 ++를 붙이면 값을 사용한 뒤 1을 증가시킨다. 2
  echo $num."<br/>"; // 3
  echo --$num."<br/>"; // 숫자 앞에 --를 붙이면 1을 감소시킨 뒤 값을 사용한다. 2
  echo $num--."<br/>"; // 숫자 뒤에 --를 붙이면 값을 사용한 뒤 1을 감소시킨다. 2
  echo $num."<br/>"; // 1
?>

