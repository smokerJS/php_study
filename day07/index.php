<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>글목록</title>
</head>
<body>
  <?php
    $conn = mysqli_connect("127.0.0.1:4000", "root", "root", "php");
    $result = mysqli_query($conn,"select no, writer, title, created_at from board order by no desc");
    mysqli_close($conn);
  ?>
  <h1>글목록</h1>
  <table>
    <tr>
      <th>번호</th>
      <th>작성자</th>
      <th>제목</th>
      <th>작성일</th>
      <th>수정</th>
      <th>삭제</th>
    </tr>
    <?php
      while($row = mysqli_fetch_array($result)) {
        echo("
          <tr>
            <td> $row[no] </td>
            <td> $row[writer] </td>
            <td> <a href='detail.php?no=$row[no]'>$row[title]</a></td>
            <td> $row[created_at] </td>
            <td> <a href='updateForm.php?no=$row[no]'>수정</a></td>
            <td> <a href='delete.php?no=$row[no]'>삭제</a></td>
          </tr>
        ");
      }
    ?>
  </table>
  <a href="insertForm.php">글작성</a>
</body>
</html>