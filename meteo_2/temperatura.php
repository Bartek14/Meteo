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
        <script src="chartkick.js"></script>

    <script src="https://www.gstatic.com/charts/loader.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.js"></script>

    <script>

       var CustomAdapter = new function () {
         this.name = "custom";

         this.renderLineChart = function (chart) {
           chart.getElement().innerHTML = "Hi";
         };

         this.renderCustomChart = function (chart) {
           chart.getElement().innerHTML = "Custom Chart";
         };
       };

       Chartkick.CustomChart = function (element, dataSource, options) {
         Chartkick.createChart("CustomChart", this, element, dataSource, options);
       };

       Chartkick.adapters.unshift(CustomAdapter);
     </script>

     <style>
       body {
         padding: 20px;
         margin: 0;
         font-family: "Helvetica Neue", Arial, Helvetica, sans-serif;
       }

       h1 {
         text-align: center;
       }
     </style>

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
                <h1>Line Chart</h1>

                  <div id="line" style="height: 300px;"></div>
                  <script>
                  var lol = 11;
                  //chart.updateData("2013-02-14":6)
                    new Chartkick.LineChart("line", {"2013-02-10":lol,"2013-02-11":6,"2013-02-12":3,"2013-02-13":2},
                    {xtitle: "Time", ytitle: "Population"}, {download: true});
                    new Chartkick.LineChart("line", {"2013-02-10":lol,"2013-02-11":6,"2013-02-12":3,"2013-02-13":2},{download: true});



                //    var chart = Chartkick.LineChart["line"];
                    // console.log(chart);
                    // console.log(chart.getElement());
                    // console.log(chart.getDataSource());
                  //   console.log(chart.getData());
                    // console.log(chart.getOptions());
                    // console.log(chart.getChartObject());
                  //  Chartkick.eachChart( function (chart) { console.log(chart.getData()) } );

                  </script>

                  <div style="clear:both;"></div>

                              <div style="clear:both;"></div>
                            </div>
                            </div>
                              <div class="rectangle"> Dzień dobry <a href="log_pan.php" class="foot"> Panel administracyjny</a></div>
          </div>


    </body>
</html>
