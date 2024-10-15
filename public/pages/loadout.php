        <main class="window window--dark">
          <div class="window__title window__title--green"><?php to_pixel("Battle loadout") ?></div>
          <div class="window__title window__title--red btn btn-close"><a href="./"></a></div>
          <div class="window window--light window__content">
            <div class="window window--dark pokemon-loadout">
              <div class="tabs">
                <?php  
                  $tabs = get_loadouts($_SESSION['user_id']);
                  for($i = 0; $i < 3; $i++):
                ?>
                <div class="tab tab--light<?php echo $i == $loadout_no ? "" : " tab--blank"; ?>">
                  <a href="<?php echo $i == $loadout_no ? "" : "./index.php?p=loadout&l=".$i; ?>">
                    <?php to_pixel(array_key_exists($i,$tabs) ? $tabs[$i]['name'] : ( $i == 1 ? "B" : ($i == 2 ? "C": "A")));?>
                  </a>
                </div>


                <?php endfor;
                ?>
              </div>
              <div class="window window--light tabs__pages pokemon-loadout__pages">
          <?php
            for($i = 0; $i< 3; $i++){
              if($pet = get_loadout_pet($_SESSION["user_id"], $loadout_no, $i)):
              ?>

                  <div class="window__title window__title--blue pokemon-card btn">
                    <a href="<?php echo "./index.php?p=choose&l=$loadout_no&s=$i";?>"></a>
                    <h3 class="pokemon-thumbnail__name"><?php to_pixel($pet["nickname"]); ?></h3>
                    <h4 class="pokemon-thumbnail__race"><?php to_pixel(ucfirst($pet["name"])); ?></h4>
                    <div class="window window--light pokemon-thumbnail__icon active pokemon-thumbnail--margin-bottom">
                      <img src=<?php echo "./../img/thumb/thumb_".$pet['vnum'].".png"; ?> alt="">
                    </div>
                    <div class="pokemon__details padding">
                      <ul class="pokemon__types">
                          <?php
                            foreach(explode(",", $pet["types"]) as $type){

                              echo "<li class='pokemon__type pill type--$type'>";
                              echo to_pixel(strtoupper($type));
                              echo "</li>";

                            }
                          ?>
                      </ul>
                      <?php display_stats($pet);?>
                    </div>
                  </div>
              <?php else: ?>

                <div class="window__title window__title--blue pokemon-card pokemon-card--empty btn">
                    <a href="<?php echo "./index.php?p=choose&l=$loadout_no&s=$i";?>"><div class="plus"></div></a>
                </div>
              <?php endif; 
            } ?>
              </div>
            </div>
          </div>
        </main>
    <div id="backdrop"></div>
