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
    for($i = 3; $i <= 9; $i+=3) {
      echo "<tr>";
      echo "<th colspan='3'>".$i."단</th>";
      echo "</tr>";
      for($j = 1; $j < 10; $j+=3) {
        echo "<tr>";
        for($k = 0; $k < 3; $k++) {
          $num = $j + $k;
          echo "<td>".$i." * ".$num." = ".$i*$num."</td>";
        }
        echo "</tr>";
      }
    }
  echo "</table>";
?>