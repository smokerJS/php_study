<?php
// insert

$conn = mysqli_connect("127.0.0.1:4000", "root", "root", "php");
// 호스트
// 계정명
// 패스워드
// 데이터베이스 명
$name = $_POST["name"];
$phone = $_POST["phone"];

mysqli_query($conn,"insert into user(name, phone) values('$name', '$phone')");
echo('입력');

mysqli_close($conn);

/*

  user 테이블
  no - int(11) pk ai
  name - varchar(255) null
  phone - varchar(255) null

*/
?>