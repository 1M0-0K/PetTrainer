<?php 
function display_stats($pet){
  ?>
                      <ul class="pokemon__stats">
                        <li class="pokemon__stat">
                          <?php to_pixel("Hp");?>
                          <div class="loading progress-bar progress-bar--red"><?php to_pixel($pet["hp"]."/200"); ?></div>
                        </li>
                        <li class="pokemon__stat">
                          <?php to_pixel("ATK");?>
                          <div class="loading progress-bar progress-bar--grey"><?php to_pixel($pet["str"]."/200"); ?></div>
                        </li>
                        <li class="pokemon__stat">
                          <?php to_pixel("DEF");?>
                          <div class="loading progress-bar progress-bar--grey"><?php to_pixel($pet["dex"]."/200"); ?></div>
                        </li>
                        <li class="pokemon__stat">
                          <?php to_pixel("SATK");?>
                          <div class="loading progress-bar progress-bar--blue"><?php to_pixel($pet["magic"]."/200"); ?></div>
                        </li>
                        <li class="pokemon__stat">
                          <?php to_pixel("SDEF");?>
                          <div class="loading progress-bar progress-bar--blue dark"><?php to_pixel($pet["magic_prot"]."/200"); ?></div>
                        </li>
                        <li class="pokemon__stat">
                          <?php to_pixel("SPD");?>
                          <div class="loading progress-bar progress-bar--green"><?php to_pixel($pet["speed"]."/200"); ?></div>
                        </li>
                      </ul>
<?php
}
?>
