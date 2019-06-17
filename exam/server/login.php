<?php
  session_start();
  class Login {
    private $result;
    public function __construct($method) {
      $conn = mysqli_connect("127.0.0.1:4000", "root", "root", "php");
      $result = null;
      switch ($method) {
        case "POST": $this->result = $this->login($conn); break;
        case "DELETE": $this->result = $this->logout(); break;
        default: $this->result = "404error"; break;
      }
      mysqli_close($conn);
    }

    public function getResult() {
      return json_encode($this->result);
    }

    public function login($conn) {
      $id = $_POST["id"];
      $password = $_POST["password"];
      $row = mysqli_fetch_array(mysqli_query($conn,"select * from user where id = '$id' and password = '$password'"));
      if($row["id"] == null) {
        return "error";
      }else {
        $_SESSION["user_no"] = $row["no"];
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["user_name"] = $row["name"];
        return "success";
      }
    }
    public function logout() {
      unset($_SESSION["user_no"]);
      unset($_SESSION["user_id"]);
      unset($_SESSION["user_name"]);
    }
  }
  $login = new Login($_SERVER['REQUEST_METHOD']);
  echo($login->getResult());
?>