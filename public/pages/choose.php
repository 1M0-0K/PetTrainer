        <main class="window window--dark">
          <div class="window__title window__title--green dark"><?php to_pixel("Choose a pet") ?></div>
          <div class="window__title window__title--red btn btn-close"><a href="./"></a></div>
          <div class="window window--light window__content">
            <div class="window window--dark pokemon-list">
              <div class="pokemon-thumbnail <?php echo $current_pet ? "" : ($current_pet["vnum"] > 0 ? "" : "item-selected active");?>">
                <div class="window window--light pokemon-thumbnail__icon">
                  <a href="<?php echo "./index.php?p=choose&l=$loadout_no&s=".$_GET['s']."&c="; ?>"></a>
                </div> 
                <div class="window window--white pokemon-thumbnail__info">
                  <div class="small-arrow small-arrow--up animated active"></div>
                  <h3 class="pokemon-thumbnail__name"><?php to_pixel("Empty");?></h3>
                </div>
              </div>
              <?php 
              $pets = get_pokemon($_SESSION['user_id'], $offset, $limit);
              foreach($pets as $pet):?>
                <div class="pokemon-thumbnail <?php echo ($pet['id'] == $current_pet['id'])?'item-selected active':'dada' ?>">
                  <div class="window window--light pokemon-thumbnail__icon">
                    <a href="<?php echo "./index.php?p=choose&l=$loadout_no&s=".$_GET['s']."&c=".$pet['id'] ?>"></a>
                    <img src=<?php echo "./../img/thumb/thumb_".$pet['vnum'].".png"; ?> alt="">
                  </div> 
                  <div class="window window--white pokemon-thumbnail__info">
                    <div class="small-arrow small-arrow--up animated active"></div>
                    <h3 class="pokemon-thumbnail__name"><?php to_pixel($pet["nickname"]); ?></h3>
                    <h4 class="pokemon-thumbnail__race"><?php to_pixel(ucfirst($pet["name"])); ?></h4>
                    <div class="pokemon__details">
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
                </div>
              <?php endforeach; ?>
              <?php 
              for($i = 0; $i < 93 - count($pets); $i++){ ?>
                <div class="pokemon-thumbnail transparent">
                  <div class="window window--light pokemon-thumbnail__icon empty">
                  </div> 
                </div>
              <?php } ?>
              <div class="window window--golden btn btn-cancel">
                <a href=<?php echo "./index.php?p=loadout"."&l=".$_GET['l'];?>><?php to_pixel("Cancel");?></a>
              </div>
              <div class="window__pagination big">
                <?php to_pixel(strval($offset+1)); to_pixel("/4");?>
              </div>
            </div>
            <?php echo ($offset > 0) ?
              "<div class=\"big-arrow btn\">
                 <a href='./index.php?p=choose&l=$loadout_no&s=".$_GET['s']."&offset=".($offset-1 )."&limit=$limit'></a>
              </div>" : "";
            ?>
            <?php echo ($offset < 3) ?
            "<div class=\"big-arrow big-arrow--right btn\">
              <a href='./index.php?p=choose&l=$loadout_no&s=".$_GET['s']."&offset=".($offset+1 )."&limit=$limit'></a> 
            </div>" : "";
            ?>
          </div>
        </main>
    <div id="backdrop"></div>
