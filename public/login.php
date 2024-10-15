<?php

require __DIR__ . '/../src/bootstrap.php';
require __DIR__ . '/../src/login.php';

?>

<?php require_once __DIR__ . '/../src/inc/header.php';?>
    <form class="window window--dark window__login" action="login.php" method="post">
      <div class="window__title window__title--green"><?php to_pixel("Connect to your account") ?></div>
        <div class="field">
          <label for="username"><?php to_pixel("Username") ?>
          <div id="login__username" class="window window--white input input--text"><p class="pixel-text"></p></div>
          </label>
          <input type="text" name="username" id="username" class="window window--white input input--text" maxlength="24">
        </div>
        <div class="field">
          <label for="password" class="login__password-label">
            <?php to_pixel("Password") ?>
          </label>
          <input type="password" name="password" id="password" class="window window--white input input--text" maxlength="24">
        </div>
        <section class="form__buttons">
          <button class="window window--golden btn" type="submit"><?php to_pixel("Log In") ?></button>
          <div class="window window--light btn"><a href="./register.php"><?php to_pixel("Create new account") ?></a></div>
        </section>
    </form>

<?php require_once __DIR__ . '/../src/inc/footer.php';?>
