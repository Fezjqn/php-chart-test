<?php
echo '<!DOCTYPE html>';
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>";
echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/highcharts/8.1.2/highcharts.js'></script>";
echo "</head>";
echo "<body>";
echo "<div id='container'></div>";
echo "<script>";
echo "Highcharts.chart('container', {";
echo "chart: {";
echo "type: 'column'";
echo "},";
echo "title: {";
echo "text: 'Poverty indicator in Peru between the years 1995 and 2020'";
echo "},";
echo "series: [{";
echo "	data:[0.1984,0.1945,0.1934,0.1927,0.2025,0.1755,0.1466,0.1631,0.1781,0.156,0.1322,0.1092,0.0881,0.0682,0.065,0.0608,0.054,0.0482,0.0472,0.046,0.045,0.0357,0.0298,0.0582]";
echo "	}]";
echo "	});";
echo "</script>";
echo "</body>";
echo "</html>";
?>
