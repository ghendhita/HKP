<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <?php include_once 'views/head.php'; ?>
    <?php //include_once 'jshead.php'; ?>

  </head>
  <body>

    <?php include_once 'views/navbar.php'; ?>
    <?php $ind = "home"; include_once 'module/'.$ind.'/induk_'.$ind.'.php'; ?>

  </body>

  <?php// include_once 'jsfoot.php'; ?>

</html>
