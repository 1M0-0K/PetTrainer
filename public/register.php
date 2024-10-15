<?php

require __DIR__ . '/../src/bootstrap.php';
require __DIR__ . '/../src/register.php';

?>


<?php require_once __DIR__ . '/../src/inc/header.php';?>
<form class="window window--dark window__login" action="register.php" method="post">
  <div class="window__title window__title--green"><?php to_pixel("Create an account") ?></div>

    <div class="field">
        <label for="username">
          <?php to_pixel("Username") ?>
          <div id="register__username" class="window window--white input input--text"><p class="pixel-text"></p></div>
        </label>
        <input type="text" name="username" id="username" class="window window--white input input--text">
        <small><?= $errors['username'] ?? '' ?></small>
    </div>

    <div class="field">
        <label for="nickname">
          <?php to_pixel("Nickname") ?>
          <div id="register__nickname" class="window window--white input input--text"><p class="pixel-text"></p></div>
        </label>
        <input type="text" name="nickname" id="nickname" class="window window--white input input--text">
        <small><?= $errors['nickname'] ?? '' ?></small>
    </div>

    <div class="field">
        <label for="email">
          <?php to_pixel("Email") ?>
          <div id="register__email" class="window window--white input input--text"><p class="pixel-text"></p></div>
        </label>
        <input type="email" name="email" id="email" class="window window--white input input--text">
        <small><?= $errors['email'] ?? '' ?></small>
    </div>

    <div class="field">
        <label for="password"><?php to_pixel("Password") ?></label>
        <input type="password" name="password" id="password" class="window window--white input input--text">
        <small><?= $errors['password'] ?? '' ?></small>
    </div>

    <div class="field">
        <label for="password2"><?php to_pixel("Password") ?></label>
        <input type="password" name="password2" id="password2" class="window window--white input input--text">
        <small><?= $errors['password2'] ?? '' ?></small>
    </div>

    <div class="field">
        <label for="agree" class="terms">
            <input type="checkbox" name="agree" id="agree" value="checked" <?= $inputs['agree'] ?? '' ?> /><?php to_pixel("I agree to Terms and Conditions")?>
        </label>
        <small><?= $errors['agree'] ?? '' ?></small>
    </div>

    <div class="form__buttons">
      <button class="window window--golden" type="submit"><?php to_pixel("Register");?></button>
      <div class="window window--light btn"><a href="./login.php"><?php to_pixel("I have an account") ?></a></div>
    </div>

</form>

<?php require_once __DIR__ . '/../src/inc/footer.php';?>
