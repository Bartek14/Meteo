<?php
  session_start();

  if(!isset($_SESSION['zalogowany']))
  {
    header('Location: log_pan.php');
    exit();
  }
 ?>
<!DOCTYPE HTML>
<html lang="pl">
  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style_portfolio.css" type="text/css"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Kalibracja</title>
  </head>

    <body>
      <?php
        echo '<p>Cześć '.$_SESSION['login'].'! [<a href="logout.php" class="tilelink">Wyloguj</a>]</p>';
        echo "Tutaj będą opcje kalibracji."
        ?>

    </body>
</html>
