<?php
  class User {
    private $result;
    public function __construct($method) {
      $conn = mysqli_connect("127.0.0.1:4000", "root", "root", "php");
      $result = null;
      switch ($method) {
        case "POST": $this->result = $this->insertUser($conn); break;
        case "GET": $this->result = $this->retrieveUser($conn); break;
        default: $this->result = "404error"; break;
      }
      mysqli_close($conn);
    }

    public function getResult() {
      return json_encode($this->result);
    }

    public function insertUser($conn) {
      $id = $_POST["id"];
      $name = $_POST["name"];
      $password = $_POST["password"];
      $birth = $_POST["birth"];
      $phone = $_POST["phone"];
      $email = $_POST["email"];
      $message = $_POST["message"];
      mysqli_query($conn,"insert into user(id, name, password, birth, phone, email, message) values('$id', '$name', '$password', '$birth', '$phone', '$email', '$message')");
      return "success";
    }

    public function retrieveUser($conn) {
      return mysqli_fetch_array(mysqli_query($conn,"select $_GET[type] from user where $_GET[type] = '$_GET[value]'"));
    }
  }
  $user = new User($_SERVER['REQUEST_METHOD']);
  echo($user->getResult());
?>