<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Study03</title>
</head>
<body>
  <ul>
    <?php
      // update
      $conn = mysqli_connect("127.0.0.1:4000", "root", "root", "php");
      $result = mysqli_query($conn,"select * from user");
      $no = 1;
      while($row = mysqli_fetch_array($result)) {
        echo("<li>");
        echo("이름 : $row[name] | 번호 : $row[phone]");
        echo("<a href='study03-form.php?no=$no'>수정</a></li>");
        $no++;
      }
      mysqli_close($conn);
    ?>
  </ul>
</body>
</html>