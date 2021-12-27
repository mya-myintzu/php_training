<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'demo');
define('RESULT_PER_PAGE', 10);

function convertToArray($result) {

    $rows = mysqli_fetch_all($result);

    $i = 0;
    while ($i < $result->num_rows) {
        echo '["' .  $rows[$i][0] . '", ' . $rows[$i][1] . "]";
        if ($i != $result->num_rows-1) {
            echo ',';
        }
        $i++;
    }
}


/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tutorial 9</title>
</head>
<body>
    <div id="chrtPie"></div>
    <script src="js/loader.js"></script>
    <script>
        // Load the current library release
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawPieChart);
        google.charts.setOnLoadCallback(drawLineChart);

        function drawPieChart() {

            // Convert Array to DataTable to dispaly
            var data = google.visualization.arrayToDataTable([
                ['Address', 'Number of People'],
                // Load query from MySQL Database
                <?php
                    $query = "SELECT address, COUNT(id) AS total FROM employees
                        GROUP BY address ORDER BY address;";
                    convertToArray(mysqli_query($link, $query));
                ?>
            ]);

            // Set options for Pie Chart
            var options = {
                title: 'People by address',
                slices: {0: {color: '#DC3912'}, 1: {color: '#FF9900'}, 2: {color: '#3366CC'}},
                is3D: true,
                width: 1000,
                height: 500
            };

            // Draw Pie chart
            var chart = new google.visualization.PieChart(document.getElementById('chrtPie'));
            chart.draw(data, options);
        }
    </script>
</body>
</html>