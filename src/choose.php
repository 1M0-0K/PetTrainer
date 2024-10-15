<?php 

  if(is_value_get('p', "choose")){

    $offset = 0;
    $limit = 93;
    if(isset($_GET['limit'])){
      $limit = $_GET['limit'];
    }
    if(isset($_GET['offset'])){
      $offset = $_GET['offset'];
    }

    if(isset($_GET['l']) && isset($_GET['s']) && isset($_GET['c'])){
      add_loadout_pet($_SESSION['user_id'], $_GET['l'],  $_GET['s'], $_GET['c']);
      header("Location: ./index.php?p=loadout"."&l=".$_GET['l']);
    }else if(isset(($_GET['l'])) && isset($_GET['s'])){
      $loadout_no = $_GET['l'];
      $current_pet = get_loadout_pet($_SESSION['user_id'], $loadout_no, $_GET['s']);
    }else{
      header("Location: ./");
    }
  }
