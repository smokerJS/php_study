<?
  $score = array(10,2,6,1,7,1,6,2,11,30,29,12,35,21,43);
  for($i = 0; $i < count($score) ; $i++) {
    for($j = $i + 1; $j < count($score) ; $j++) {
      if($score[$i] > $score[$j]) {
        $temp = $score[$i];
        $score[$i] = $score[$j];
        $score[$j] = $temp;
      }
    }
  }

  for($i = 0; $i < count($score) ; $i++) {
    echo $score[$i]."<br/>";
  }

  /*
    버블정렬
    배열의 앞의 원소가 뒤의 원소보다 더 큰지 비교하여 더 클 경우 뒤로 보내 배열의 원소들을 정리하는 알고리즘
  */
?>