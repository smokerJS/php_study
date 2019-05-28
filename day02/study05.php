<?
  $score = 13;
  $result;
  switch ($score) { // 값을 알 수 없는 변수를 넣는다.
    case 1: // 변수의 값을 예상하여 조건을 넣는다.
    case 2: // break 를 선언하지 않을경우 조건을 계속 비교한다.
    case 3:
      $result = "3보다 작은 수";
      break;
    case 4:
    case 5:
    case 6:
      $result = "4보다 크고 6보다 작은 수";
      break;
    case 7:
    case 8:
    case 9:
      $result = "7보다 크고 9보다 작은 수";
      break;
    default:
      $result = "10 이상의 수";
      break;
  }

  echo "$score : $result 입니다.";
?>