        <section class="user-panel">
          <div class="user-summary">
            <div class="window__title window__title--blue dark">
              <img class="user-summary__image" src="./img/thumb/thumb_25.png" alt="" draggable="false">
            </div>
            <div class="window__title  window__title--blue window--dark user-summary__details">
              <div class="container--width">
                <div class="user-summary__profile user-summary__name"><?php to_pixel($_SESSION['nickname']); ?></div>
                <div class="user-summary__profile user-summary__level"><?php to_pixel("LV."); to_pixel("50"); ?></div>
              </div>
              <div class="container--width">
                <div class="user-summary__profile user-summary__profile--flex user-summary__exp"><?php to_pixel("EXP:");to_pixel("123"); ?></div>
                <div class="user-summary__profile user-summary__profile--flex user-summary__gold"><?php to_pixel("Gold:");to_pixel("23"); ?></div>
              </div>
            </div>
          </div>
          <nav class="mainmenu">
            <ul class="mainmenu__list">
              <li class="mainmenu__item window window--golden icon__loadout">
                <a href="./index.php?p=loadout" class="mainmenu__link" data-tooltip="Loadout"></a>
                <div class="window window--white"><?php to_pixel("Loadout");?></div>
              </li>
              <li class="mainmenu__item window window--golden icon__pokedex">
                <a href="./index.php?p=pokedex" class="mainmenu__link" data-tooltip="Pokedex"></a>
                <div class="window window--white"><?php to_pixel("Inventory");?></div>
              </li>
              <!--
              <li class="mainmenu__item window window--golden icon__settings">
                <a href="./index.php?p=settings" class="mainmenu__link" data-tooltip="Settings"></a>
                <div class="window window--white"><?php to_pixel("Settings");?></div>
              </li>
              -->
              <li class="mainmenu__item window window--golden icon__logout">
                <a href="./index.php?p=logout" class="mainmenu__link" data-tooltip="Logout"></a>
                <div class="window window--white"><?php to_pixel("Logout");?></div>
              </li>
            </ul>
          </nav>
        </section>
