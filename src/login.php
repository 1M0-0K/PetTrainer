<?php

if(strtoupper($_SERVER['REQUEST_METHOD']) === "POST"){

  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT id, login, nickname, password FROM account WHERE login = :username";
  $stmt = db()->prepare($sql);
  $stmt->bindValue(":username", $username, PDO::PARAM_STR);
  $stmt->execute();

  $user = $stmt->fetch(PDO::FETCH_ASSOC);
  
  if($user && password_verify($password, $user['password'])){

    session_regenerate_id();

    $_SESSION['username'] = $user['login'];
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['nickname'] = $user['nickname'];
    header('Location: / ');
    exit;
  }else{
    $errors['username'] = "Wrong username or password";
    $errors['password'] = "Wrong username or password";
  }
}
