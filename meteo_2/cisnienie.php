<!DOCTYPE HTML>
<html lang="pl">
  <head>
    <meta charset="utf-8"/>
    <http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Oto strona</title>
    <meta name="description" content="Strona z moim Portfolio"/>
    <meta name="keywords" content="strony"/>

        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Lato"
        rel="stylesheet">
        <link rel="stylesheet" href="style_portfolio.css" type="text/css"/>
        <link rel="stylesheet" href="css/fontello.css" type="text/css"/>
        <script type="text/javascript" src="clock.js"></script>
        <script type="text/javascript" src="graph_lib.js"></script>
      </head>
        <body  onload="counting();">
          <div id="container">

              <div class="rectangle">
                  <div id="logo"><a href="meteo.php" class="hed">Stacja Meteo</a></div>
                  <div id="clock"></div>
                  <div style="clear:both;">
              </div>
            </div>

          <div class="square">
              <div class="tile1">
                <a href="temperatura.php" class="tilelink"><i class="icon-temperature"></i><br/>Temperatura</a>
              </div>
              <div class="tile1">
                <a href="wiatr.php" class="tilelink"><i class="icon-wind"></i><br/>Wiatr</a>
              </div>
              <div style="clear:both;"></div>
              <div class="tile2">
                <a href="wilgotnosc.php" class="tilelink"><i class="icon-cloud-wind"></i><br/>Wilgotność</a>
              </div>
              <div class="tile3">
                <a href="naslonecznienie.php" class="tilelink">  <i class="icon-sun"></i><br/>Nasłonecznienie</a>
              </div>
              <div style="clear:both;"></div>
              <div class="tile4">
                <a href="cisnienie.php" class="tilelink">  <i class="icon-fog"></i><br/>Ciśnienie</a>
              </div>
          </div>
          <div class="square">
              <div class="tile5">

                <canvas width="720" height="400" id="canv"></canvas>
      <script>
      var data = new Array(2,4,6,8,10,12,40);
      var to = new MakeDraw();
      to.id="canv";
      to.data=data;
      to.plot();
      to.bgColor = 'rgba(100,200,300,1)';
      </script>

                <br/><br/>

          <div style="clear:both;"></div>

                    <div style="clear:both;"></div>
                  </div>
                  </div>
                    <div class="rectangle">2017 &copy; Dzień dobry <a href="log_pan.php" class="foot"> Panel administracyjny</a></div>
          </div>

    </body>
</html>
