<?php
  session_start();

  if(!isset($_POST['login'])||!isset($_POST['password']))
  {
    header('Location: log_pan.php');
    exit();
  }
  require_once "connect.php"; ##Wymagaj pliku _once czyli jak już dołączyłeś to nic się nie stało :)
  ##Gdyby było include to dalej wykonywałby się skrypt

  $polaczenie = @new mysqli($host,$db_user,$db_haslo,$db_name); ## @ wycisza powiadomienia o  ewentualnych błędach

    if($polaczenie->connect_errno!=0)
      {
        echo "Error: ".$polaczenie->connect_errno; ## " Opis: ".$polaczenie->connect_error;
      }
    else
    {
      $login = $_POST['login'];
      $haslo = $_POST['password'];

      $login=htmlentities($login,ENT_QUOTES, "UTF-8");##encje htmla czyli zestaw znaków odpowiadający temu znakowi ale interpretowany  iwypisywany inaczej (?)
      $haslo=htmlentities($haslo,ENT_QUOTES, "UTF-8");## te QUOTES to bierze pod uwagę też apostrofy i cudzysłowia, można dać NOQUOTES
          ## login i hasło przepuszczane są przez te funkcje żeby jakiś hakjer nie wstrzyknął sqla w loginie czy haśle

      if($rezultat = @$polaczenie->query(sprintf("SELECT * FROM zaloguj WHERE
         login='%s' AND haslo='%s'",  ## %s pokazuje miejsce gdzie jest ta zmienna, w tym przypadku string (s) i potem pierwszy do pierwszego argumentu po przecinku i drugi idzie do drugiego mysqli
       mysqli_real_escape_string($polaczenie,$login),
         mysqli_real_escape_string($polaczenie,$haslo))))
        {
          $ilu_userow = $rezultat->num_rows;
          if($ilu_userow>0) ##znaczy ilu_userow=1
            {
                $_SESSION['zalogowany'] = true;##flaga że jest zalogowany to po przejściu ponownie na tę strone nie wywali go do logowania

            $wiersz = $rezultat->fetch_assoc();##zamiast brac po numerze id to bierzesz skojarzeniowo (tablica asocjacyjna) po nazwach kolumn
              $_SESSION['login']= $wiersz['login'];## ta linia i reszta kompanii musi9 być pod fetchem pronto


            unset($_SESSION['blad']);##usuń bo po co już nam ona jak sie zalogował
            $rezultat->free(); ##pozbywanie się z pamieci niepotrzebnych rezultatów zapytania, tu rezultat
              header('Location: kalibracja.php');
            }
        else
            {
              $_SESSION['blad'] = '<span style= "color:red"> TY MAŁY BUNTOWNIKU. LUBIĘ CIĘ. ;)</span>';
              header('Location: log_pan.php');
            }
        }

      $polaczenie->close();
    }


 ?>
