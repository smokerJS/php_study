<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Study03</title>
</head>
<body>
  <?php
    $no = $_GET["no"];
    $conn = mysqli_connect("127.0.0.1:4000", "root", "root", "php");
    $result = mysqli_query($conn,"select * from user where no=$no");
    $row = mysqli_fetch_array($result);
    mysqli_close($conn);
  ?>
  <form method="POST" action="study03.php">
    <input type="hidden" name="no" value="<?= $no ?>" />
    <label>
      이름 <input type="text" name="name" value="<?= $row[name] ?>"/>
    </label>
    <label>
      연락처 <input type="text" name="phone" value="<?= $row[phone] ?>"/>
    </label>
    <button>
      제출
    </button>
  </form>
</body>
</html>