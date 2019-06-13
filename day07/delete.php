<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>작성완료</title>
</head>
<body>
  <?php
    $conn = mysqli_connect("127.0.0.1:4000", "root", "root", "php");
    mysqli_query($conn,"delete from board where no=$_GET[no]");
    mysqli_close($conn);
  ?>
  <h1>삭제완료</h1>
  <a href="index.php">돌아가기</a>
</body>
</html>