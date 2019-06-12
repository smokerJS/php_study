<?php
  function getValue($val) {
    return $_POST[$val];  // POST 방식으로 넘어온 변수를 호출하는 전역변수
  }
  echo("<h1>".getValue("title")."</h1>");
  echo("<p>이름 : ".getValue("name")."</p>");
  echo("<p>id : ".getValue("id")."</p>");
  echo("<p>password : ".getValue("pw")."</p>");
?>