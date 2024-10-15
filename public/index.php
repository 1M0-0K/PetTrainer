<?php
  require __DIR__ . '/../src/bootstrap.php';
  require_login();
  is_first_login();
  include __DIR__ . '/../src/loadout.php';
  include __DIR__ . '/../src/choose.php';
  include __DIR__ . '/../src/inventory.php';
  include __DIR__ . '/../src/starter.php';
  include __DIR__ . '/../src/logout.php';
?>

<?php require_once __DIR__ . '/../src/inc/header.php'; ?>
<?php require_once __DIR__ . '/../src/inc/city.php'; ?>
<?php require_once __DIR__ . '/../src/inc/user-panel.php'; ?>
<?php 
if(isset($_GET['p']) && !empty($_GET['p'])){
  if(file_exists("./pages/" . $_GET['p'] . ".php")){
    include("./pages/" . $_GET['p'] . ".php");
  }else{
    include("./pages/worldmap.php");
  }
}else{
  include("./pages/worldmap.php");
}
?>
<?php require_once __DIR__ . '/../src/inc/footer.php'; ?>
