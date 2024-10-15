<?php

  if(isset($_GET['wild'])){
    $wild = [];
    $player=[];
    $state=0;
    $wdl = 0;
    $pls = 0;
    for($i = 0; $i < rand(1, 3); $i++){
      $wild[$i] = get_wild_pokemon();
    }
    $loadout_pets = get_loadout($_SESSION['user_id'], 0);
    $player[0] = get_pokemon($_SESSION['user_id'],0, 1, $loadout_pets[0]['pet1']);
    $player[1] = get_pokemon($_SESSION['user_id'],0, 1, $loadout_pets[1]['pet2']);
    $player[2] = get_pokemon($_SESSION['user_id'],0, 1, $loadout_pets[2]['pet3']);

    for($i = 0; $i < count($player); $i++){
      for($j = $wdl; $j < count($wild); $j++){
        $state = 1;
        while($state){
          $wild[$j][0]['hp'] -= $player[$i][0]['str'];
          if($wild[$j][0]['hp'] < 1){
            $wdl++;
            break;
          }
          $player[$i][0]['hp'] -= $wild[$j][0]['str'];
          if($player[$i][0]['hp'] < 1){
            $pls++;
            break;
          }
        }
      }
    }

    if(count($wild) == $wdl){
      echo "<div class='window window--dark' style='position: absolute; top:50%; left:50%; transform: translate(-50%, -50%); padding: calc(var(--scale) * 20px);'>";
      echo to_pixel("You win");
      echo "</div>";
    }else{
      echo "<div class='window window--dark' style='position: absolute; top:50%; left:50%; transform: translate(-50%, -50%); padding: calc(var(--scale) * 20px);'>";
      echo to_pixel("You lose");
      echo "</div>";
    }

  }

?>
        <main>
            <div class="window window--white map map__shop"><h2><?php to_pixel("Shop");?></h2></div>
            <div class="window window--white map map__wild"><a href="./?wild"><h2><?php to_pixel("Wild");?></h2></a></div>
            <div class="window window--white map map__tournment"><h2><?php to_pixel("Tournament");?></h2></div>
            <div class="window window--white map map__hospital"><h2><?php to_pixel("Hospital");?></h2></div>
            <div class="window window--white map map__gym"><h2><?php to_pixel("Gym");?></h2></div>
            <div class="window window--white map map__missions"><h2><?php to_pixel("Missions");?></h2></div>
        </main>
