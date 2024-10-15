<?php 
?>
        <main class="window window--dark">
          <div class="window__title window__title--green"><?php to_pixel("Choose your starter") ?></div>
          <div class="window window--light window__content">
          <?php
            for($i = 0; $i< 3; $i++){
              $pet = get_pokemons($start_pet[$i])[0];
              ?>

                  <div class="window__title window__title--blue pokemon-card pokemon-card--first btn">
                    <a href="<?php echo "./index.php?p=first&pet=".$start_pet[$i];?>"></a>
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
          <?php } ?>
          </div>
        </main>


    <div id="backdrop"></div>
