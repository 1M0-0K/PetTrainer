<?php 

  if(is_value_get('p', "pokedex")){

    $offset = 0;
    $limit = 94;
    if(isset($_GET['limit'])){
      $limit = $_GET['limit'];
    }
    if(isset($_GET['offset'])){
      $offset = $_GET['offset'];
    }

  }
