<?php

  session_start();


 ?>
<!DOCTYPE HTML>
<html lang="pl">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <link rel="stylesheet" href="style_portfolio.css" type="text/css"/>
    <title>Panel administracyjny logowania</title>
  </head>

    <body>
        <a href="meteo.php" class="tilelink">Wróć na stronę główną</a>
            <br/>Jako wykonawcy projektu logujemy się tutaj w celu ewentualnej kalibracji narzędzi pomiarowych. Próbay logowania osób postronnych są zabronione<br/><br/>
            <form action="zaloguj.php" method="post">
              Login: <br/><input type="text" name="login"/><br/>
              Hasło: <br/><input type="password" name="password"/><br/><br/>
              <input type="submit" value="Zaloguj">
            </form>

<?php
if(isset($_SESSION['blad']))
  echo $_SESSION['blad'];
?>

    </body>
</html>
