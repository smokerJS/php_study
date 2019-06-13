<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>글상세</title>
</head>
<body>
  <?php
    $conn = mysqli_connect("127.0.0.1:4000", "root", "root", "php");
    $result = mysqli_query($conn,"select * from board where no=$_GET[no]");
    $row = mysqli_fetch_array($result);
    mysqli_close($conn);
  ?>
  <h1>글상세</h1>
  <div>
    번호 : <?= $row["no"] ?>
  </div>
  <div>
    작성일 : <?= $row["created_at"] ?>
  </div>
  <div>
    작성자 : <?= $row["writer"] ?>
  </div>
  <div>
    제목 : <?= $row["title"] ?>
  </div>
  <br/>
  <div>
    <?= $row["content"] ?>
  </div>
  <br/>
  <a href="index.php">돌아가기</a>
</body>
</html>