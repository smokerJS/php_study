<?
  echo "
    <style>
      table {
        border-collapse: collapse;
      }
      td {
        width: 30px;
        height: 30px;
      }
      td.checked {
        border: 1.5px dashed #000;
        background-color: #ddd;
      }
    </style>
  ";
  $loop = 10;
  $loop_handler = true;
  $index = 5;
  echo "<table>";
  while($loop) {
    echo "<tr>";
    for($i = 1; $i <= 9; $i++) {
      if($loop > 5 && ($i <= 5) && ($i >= $index)) echo "<td class='checked'></td>";
      elseif($loop <= 5 && ($i >= 5) && ($index > $i % 5)) echo "<td class='checked'></td>";
      else echo "<td></td>";
    }
    echo "</tr>";
    $loop--;
    --$index ? $index : $index = 5;
  }
  echo "</table>";
?>