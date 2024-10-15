<?php

function db(){
  static $pdo;
  if(!$pdo){
    $pdo = new PDO(
      sprintf("mysql:host=%s;dbname=%s;charset=UTF8", DB_HOST, DB_NAME),
      DB_USER,
      DB_PASSWORD,
      [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

  }

  return $pdo;

}

function get_pokemon_t($id='0'){
  $sql = "SELECT * FROM pet JOIN pet_proto ON pet.vnum =pet_proto.vnum"; 

  if($id>0){
    $sql .= " WHERE id = :id";
  }

  $stmt = db()->prepare($sql);
  if($id>0){
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
  }
  $stmt->execute();

  return $stmt->fetchALL(PDO::FETCH_ASSOC);
}

function get_pokemons($id='0'){
  $sql = "SELECT * FROM pet_proto"; 

  if($id>0){
    $sql .= " WHERE vnum = :id";
  }

  $stmt = db()->prepare($sql);
  if($id>0){
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
  }
  $stmt->execute();

  return $stmt->fetchALL(PDO::FETCH_ASSOC);
}

function get_pokemon($owner_id, $offset, $limit, $id='0'){
  $sql = "SELECT * FROM pet JOIN pet_proto ON pet.vnum = pet_proto.vnum WHERE owner_id = :owner_id"; 

  if($id>0){
    $sql .= " and id = :id";
  }

  $sql .= " LIMIT :limit OFFSET :offset"; 

  $stmt = db()->prepare($sql);
  $stmt->bindValue(':owner_id', $owner_id, PDO::PARAM_INT);
  $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
  $stmt->bindValue(':offset', $offset * $limit, PDO::PARAM_INT);
  if($id>0){
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
  }
  $stmt->execute();

  return $stmt->fetchALL(PDO::FETCH_ASSOC);
}

function get_wild_pokemon($id='143'){
  $sql = "SELECT * FROM pet_proto WHERE vnum = :pet_id"; 

  $stmt = db()->prepare($sql);
  $stmt->bindValue(':pet_id', $id, PDO::PARAM_INT);
  $stmt->execute();

  return $stmt->fetchALL(PDO::FETCH_ASSOC);
}

function add_pokemon($owner_id, $pet_id){
  $sql = 'INSERT INTO pet(owner_id, vnum, nickname, exp, level) VALUES(:owner_id, :pet_vnum, "", 0, 0)'; 

  $stmt = db()->prepare($sql);
  $stmt->bindValue(':owner_id', $owner_id, PDO::PARAM_INT);
  $stmt->bindValue(':pet_vnum', $pet_id, PDO::PARAM_INT);

  return $stmt->execute();

}

function add_loadout($owner_id, $name, $order){
  $sql = 'INSERT INTO loadout(owner_id, name, pos) VALUES(:owner_id, :name, :pos)'; 


  $stmt = db()->prepare($sql);
  $stmt->bindValue(':owner_id', $owner_id, PDO::PARAM_INT);
  $stmt->bindValue(':name', $name, PDO::PARAM_STR);
  $stmt->bindValue(':pos', $order, PDO::PARAM_INT);

  return $stmt->execute();

}

function add_loadout_pet($owner_id, $pos, $slot, $pet_id){
  $sql = 'UPDATE loadout SET '; 

  switch($slot){
    case 0:
      $sql .= 'pet1 = :pet_id';
      break;
    case 1:
      $sql .= 'pet2 = :pet_id';
      break;
    case 2:
    default;
      $sql .= 'pet3 = :pet_id';
      break;
  }

  $sql .=' WHERE owner_id = :owner_id and pos = :pos'; 

  $stmt = db()->prepare($sql);
  $stmt->bindValue(':pet_id', $pet_id, PDO::PARAM_INT);
  $stmt->bindValue(':owner_id', $owner_id, PDO::PARAM_INT);
  $stmt->bindValue(':pos', $pos, PDO::PARAM_INT);

  return $stmt->execute();

}

function set_first_login($account_id){
  $sql = 'UPDATE account SET first_login = 1 WHERE id = :account_id'; 

  $stmt = db()->prepare($sql);
  $stmt->bindValue(':account_id', $account_id, PDO::PARAM_INT);

  return $stmt->execute();

}

function get_first_login($account_id){
  $sql = "SELECT first_login FROM account WHERE id = :account_id"; 

  $stmt = db()->prepare($sql);
  $stmt->bindValue(':account_id', $account_id, PDO::PARAM_INT);
  $stmt->execute();

  return $stmt->fetch(PDO::FETCH_ASSOC);
}

function update_pokemon_name($pet_id, $name){
  $sql = 'UPDATE pet SET nickname = :nickname WHERE id = :pet_id'; 

  $stmt = db()->prepare($sql);
  $stmt->bindValue(':pet_id', $pet_id, PDO::PARAM_INT);
  $stmt->bindValue(':nickname', $name, PDO::PARAM_STR);

  return $stmt->execute();

}

function update_pokemon_exp($pet_id, $exp, $level){
  $sql = 'UPDATE pet SET exp = :exp, level = :level WHERE id = :pet_id'; 

  $stmt = db()->prepare($sql);
  $stmt->bindValue(':pet_id', $pet_id, PDO::PARAM_INT);
  $stmt->bindValue(':exp', $exp, PDO::PARAM_INT);
  $stmt->bindValue(':level', $level, PDO::PARAM_INT);

  return $stmt->execute();

}

function get_pokemon_p($id='0'){
  $sql = "SELECT * FROM pet_proto"; 

  if($id>0){
    $sql .= " WHERE id = :id";
  }

  $stmt = db()->prepare($sql);
  if($id>0){
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
  }
  $stmt->execute();

  return $stmt->fetchALL(PDO::FETCH_ASSOC);
}

function get_loadout($owner_id, $pos){
  $sql = "select * from loadout join pet on loadout.owner_id = pet.owner_id join pet_proto on pet.vnum = pet_proto.vnum where (loadout.owner_id = :owner_id and loadout.pos = :pos) and (loadout.pet1 = pet.id or loadout.pet2 = pet.id or loadout.pet3 = pet.id)"; 

  $stmt = db()->prepare($sql);
  $stmt->bindvalue(':owner_id', $owner_id, PDO::PARAM_INT);
  $stmt->bindvalue(':pos', $pos, PDO::PARAM_INT);

  $stmt->execute();

  return $stmt->fetchall(PDO::FETCH_ASSOC);
}

function get_loadouts($owner_id){
  $sql = "SELECT * FROM loadout WHERE owner_id = :owner_id"; 

  $stmt = db()->prepare($sql);
  $stmt->bindvalue(':owner_id', $owner_id, PDO::PARAM_INT);

  $stmt->execute();

  return $stmt->fetchall(PDO::FETCH_ASSOC);
}
 
function get_loadout_pet($owner_id, $pos, $slot = 0){
  $sql = "select * from loadout join pet on loadout.owner_id = pet.owner_id join pet_proto on pet.vnum = pet_proto.vnum where (loadout.owner_id = :owner_id and loadout.pos = :pos) and ";

  switch($slot){
    case 0:
      $sql .= "(loadout.pet1 = pet.id)";
      break;
    case 1:
      $sql .= "(loadout.pet2 = pet.id)";
      break;
    case 2:
    default;
      $sql .= "(loadout.pet3 = pet.id)";
      break;
  }

  $stmt = db()->prepare($sql);
  $stmt->bindvalue(':owner_id', $owner_id, PDO::PARAM_INT);
  $stmt->bindvalue(':pos', $pos, PDO::PARAM_INT);

  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
}
 
