<?php
// delete

$conn = mysqli_connect("127.0.0.1:4000", "root", "root", "php");
$no = $_GET["no"];
mysqli_query($conn,"delete from user where no=$no");
echo("<h3>삭제완료</h3>");
echo("<a href='study04-index.php'>돌아가기</a>");
mysqli_close($conn);

?>