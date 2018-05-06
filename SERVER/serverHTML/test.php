<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Category', 'Number of problems in particular category'],
          
          <?php  
          define('DB_SERVER', 'localhost');
                    define('DB_USERNAME', 'root');
                    define('DB_PASSWORD', '');
                    define('DB_DATABASE', 'testdb');
                    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                    $sql = "SELECT category, COUNT(category) FROM problem GROUP BY (category)";
                    $result=mysqli_query($db, $sql);

                    while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

                        echo "['".$row[0]."', ".$row[1]."],";  
                    }



          ?>
        ]);

        var options = {
          title: 'Bar chart of problem category',
          width: 900,
          legend: { position: 'none' },
          chart: { title: 'Problem Categories',
                   subtitle: 'popularity by percentage' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Percentage'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
  </head>
  <body>
    <div id="top_x_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>