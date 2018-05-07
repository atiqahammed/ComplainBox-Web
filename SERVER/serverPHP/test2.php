<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Ward no. ', 'Number of Problems'],
          <?php  

          define('DB_SERVER', 'localhost');
                    define('DB_USERNAME', 'root');
                    define('DB_PASSWORD', '');
                    define('DB_DATABASE', 'testdb');
                    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
                                      
                                        $sql = "SELECT wardNo, COUNT(wardNo) FROM problem GROUP BY (wardNo)";
                                        $result=mysqli_query($db, $sql);

                                        while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

                                            echo "['Ward No. ".$row[0]."', ".$row[1]."],";  
                                        }

                                      ?>
        ]);

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: 'Problems in all Wards in DSCC',
            subtitle: 'number of problems' },
          axes: {
            x: {
              0: { side: 'top', label: 'Wards of DSCC'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_ward_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
  </head>
  <body>
    <div id="top_ward_div" style="width: 100%; height: 600px;"></div>
  </body>
</html>