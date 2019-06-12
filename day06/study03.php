<?php
// update

$conn = mysqli_connect("127.0.0.1:4000", "root", "root", "php");
$name = $_POST["name"];
$phone = $_POST["phone"];
$no = $_POST["no"];
mysqli_query($conn,"update user set name='$name',phone='$phone' where no=$no");
echo("<h3>수정완료</h3>");
echo("<a href='study03-index.php'>돌아가기</a>");
mysqli_close($conn);

?>