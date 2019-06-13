<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>글수정</title>
</head>
<body>
  <?php
      $conn = mysqli_connect("127.0.0.1:4000", "root", "root", "php");
      $result = mysqli_query($conn,"select * from board where no = $_GET[no]");
      $row = mysqli_fetch_array($result);
      mysqli_close($conn);
  ?>
  <h1>글수정</h1>
  <form method="POST" action="update.php">
    <input type="hidden" name="no" value="<?= $_GET["no"] ?>" />
    <label>
      작성자 :
      <input type="text" name="writer" value="<?= $row["writer"] ?>"/>
    </label>
    <br/><br/><br/>
    <label>
      제목 :
      <input type="text" name="title" value="<?= $row["title"] ?>"/>
    </label>
    <br/><br/><br/>
    <label>
      내용 :
      <textarea name="content">
        <?= $row["content"] ?>
      </textarea>
    </label>
    <br/><br/><br/>
    <button>수정하기</button>
    <a href="index.php">돌아가기</a>
  </form>
</body>
</html>