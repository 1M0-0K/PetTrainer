<?php 

  if(is_value_get('p', "first")){

    if(get_first_login($_SESSION['user_id'])["first_login"]){
      header('Location: ./');
      exit;
    }
    if(isset($_GET['pet'])){

      add_pokemon($_SESSION['user_id'], $_GET['pet']); 
      for($i = 0; $i < 3; $i++){
        add_loadout($_SESSION['user_id'], $i == 0 ? "A": ($i == 1 ? "B" : "C"), $i);
      }
      set_first_login($_SESSION['user_id']);
      header('Location: ./');
    }
    $start_pet = [1, 4, 7];
  }
