<?
  echo "
    <style>
      table,th,td {
        text-align: center;
        border: 1px solid #000;
        border-collapse: collapse;
      }
      th {
        width: 250px;
        padding: 10px 0;
      }
      td {
        padding: 4px;
      }
    </style>
  ";
  echo "<table>";
    for($i = 2; $i <= 9; $i++) {
      echo "<tr>";
      echo "<th colspan='3'>".$i++."단</th>";
      echo "<th colspan='3'>".$i."단</th>";
      echo "</tr>";
      for($j = 1; $j < 10; $j+=3) {
        echo "<tr>";
        for($k = 0; $k < 6; $k++) {
          $num1 = $i-1;
          $num2 = $k+$j;
          $k >= 3 && $num1++ && $num2 -= 3;
          echo "<td>$num1 * $num2 = ".$num1*$num2."</td>";
        }
        echo "</tr>";
      }
    }
  echo "</table>";
?>