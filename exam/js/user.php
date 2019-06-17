<?php
  session_start();
  echo("
    window.gon = function() {
      const user = function() {
        return {
          userNo : '$_SESSION[user_no]',
          userId : '$_SESSION[user_id]',
          userName : '$_SESSION[user_name]',
        }
      }
      return user();
    }
  ")
?>