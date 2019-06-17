<?php
  class Board {
    private $result;
    public function __construct($method) {
      $conn = mysqli_connect("127.0.0.1:4000", "root", "root", "php");
      $result = null;
      switch ($method) {
        case "POST": $this->result = $this->insertBoard($conn); break;
        case "GET": $this->result = $this->retrieveBoard($conn); break;
        default: $this->result = "404error"; break;
      }
      mysqli_close($conn);
    }

    public function getResult() {
      return json_encode($this->result);
    }

    public function insertBoard($conn) {
      $writer = $_POST["writer"];
      $content = $_POST["content"];
      $user_no = $_POST["user_no"];
      mysqli_query($conn,"insert into board(writer, content, user_no) values('$writer', '$content', '$user_no')");
      return "success";
    }

    public function retrieveBoard($conn) {
      $result = mysqli_query($conn,"select * from board order by no desc");
      $rows = array();
      while($row = mysqli_fetch_array($result)){
        $rows[] = $row;
      }
      return $rows;
    }
  }
  $board = new Board($_SERVER['REQUEST_METHOD']);
  echo($board->getResult());
?>