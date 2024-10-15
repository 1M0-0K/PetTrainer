<?php 

  if(is_value_get('p', "logout")){
    unset($_SESSION['username'], $_SESSION['user_id']);
    session_destroy();
    header('Location: login.php');
    exit;
  }
