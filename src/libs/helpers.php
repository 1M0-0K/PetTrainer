<?php

function is_user_logged_in(){
  return isset($_SESSION['username']);
}

function require_login(){
  if(!is_user_logged_in()){
    header('Location: ./login.php');
    exit;
  }
}

function is_first_login(){
  if(!get_first_login($_SESSION['user_id'])["first_login"] &&  !is_value_get('p', "first")){
    header('Location: ./index.php?p=first');
    exit;
  }
}

function is_value_get($variable, $value){
  return get_get($variable) == $value;
}

function is_set_post($variable){
  return isset($_POST[$variable]);
}

function is_set_get($variable){
  return isset($_GET[$variable]);
}

function get_post($variable){
  return is_set_post($variable) ? $_POST[$variable] : false;
}

function get_get($variable){
  return is_set_get($variable) ? $_GET[$variable] : false;
}

function to_pixel($text){
  echo "<p class=\"pixel-text\">";
  for($i = 0; $i < strlen($text); $i++){
    if(is_symbol($text[$i])){
      $char = 'space';
      switch($text[$i]){
        case ' ':
          $char = 'space';
          break;
        case '/':
          $char = 'slash';
          break;
        case ':':
          $char = 'colon';
          break;
        case '.':
          $char = 'dot';
          break;
        default:
          $char = 'space';
          break;
      }
      echo "<i class='letter " .$char . "'></i>";
    }else if(is_numeric($text[$i])){
      echo "<i class='letter n" .$text[$i] . "'></i>";
    }else{

      if($text[$i] == strtoupper($text[$i])){
        echo "<i class='letter cap-" .strtolower($text[$i]) . "'></i>";
      }else{
        if($text[$i] == 'a'){
          echo "<i class='letter " .strtolower($text[$i]) . "'></i>";
        }else{
          echo "<i class='letter " .strtolower($text[$i]) . "'></i>";
        }
      }

    }
  }
  echo "</p>";
}

function is_symbol($char){
  return preg_match('/[\/\-:+\.=]/', $char);
}

