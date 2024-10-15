<?php

if(strtoupper($_SERVER['REQUEST_METHOD']) === "POST"){

  $username = $_POST['username'];
  $email = $_POST['email'];
  $nickname = $_POST['nickname'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];

  if(!empty($username) && !empty($email) && !empty($password) && !empty($password) && !empty($nickname)){
    if($password != $password2){
      $errors['username'] = "Passwords do not match";

    }else{

      $sql = "INSERT INTO account(login, password, nickname, email) VALUES(:login, :password, :nickname, :email)";
      $stmt = db()->prepare($sql);
      $stmt->bindValue(":login", $username, PDO::PARAM_STR);
      $stmt->bindValue(":password", password_hash($password, PASSWORD_BCRYPT), PDO::PARAM_STR);
      $stmt->bindValue(":nickname", $nickname, PDO::PARAM_STR);
      $stmt->bindValue(":email", $email, PDO::PARAM_STR);
      if($stmt->execute()){
        header('Location: /login.php');
      }
    }
  } 
}
