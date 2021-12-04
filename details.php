<!DOCTYPE html>
<html lang=de>

<?php $pdo = new PDO('mysql:host=localhost;dbname=sschuelersql2', 'sschuelersql2', 'umgizaeobg'); 
$datum = $_GET['datum'];

$wochentage = array("Sonntag", "Montag", "Dienstag",
"Mittwoch", "Donnerstag", "Freitag", "Samstag");
$zeit = strtotime($datum);
?>

<head>
    <meta charset="utf-8">
    <title>The Weather</title>
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0, shrink-to-fit=no">

    <link href="css/styledetails.css" rel="stylesheet">
    <script src="vendor/ejdamm\\chart.js-php/js/Chart.min.js"></script>
    <script src="vendor/ejdamm\\chart.js-php/js/driver.js"></script>

</head>

<body>

    <header class="site-header">

        <h1 class="main-headline">Wetterdaten</h1>

    </header>


    <main>

        <section class="uebersicht">
                
            
                <?php $sql= "SELECT * FROM weather WHERE datum = '$datum'";

                $zeiten = [];
                $temperaturen = [];
                $luftdruck = [];
                $luftfeuchtigkeit = [];
                $licht = [];
                foreach ($pdo->query($sql) as $row) { 
                    array_push($zeiten, $row['zeit']);
                    array_push($temperaturen, $row['temperatur']);
                    array_push($luftdruck, $row['luftdruck']);
                    array_push($luftfeuchtigkeit, $row['luftfeuchtigkeit']);
                    array_push($licht, $row['licht']);
                }
                    ?> 

                <section class="outline">

                <section class="infokasten">

                <section class="headline">
                    <h2 class="date"><?php echo $wochentage
                    [date("w", $zeit)], date(" d.m.y", $zeit);?></h2>
                </section>

                <section class="back">
                    <a href="index.php">Startseite</a>
                </section>

                </section>

                </section>
                    
                <section class="chartbox">
                <section class="chart">

                <?php

                    require 'vendor/autoload.php';
                    use ChartJs\ChartJS;


                    $data = [
                        'labels' => $zeiten,
                        'datasets' => [[
                            'data' =>$temperaturen,
                            'backgroundColor' => '#D3D3D3',
                            'borderColor' => '#A9A9A9',
                            'label' => 'Temperatur'
                        ]]
                    ];
                    $options = [];
                    $attributes = ['id' => 'example', 'width' => 100, 'height' => 100];
                    $chart = new ChartJS('line', $data, $options, $attributes);

                    // Echo your line
                    echo $chart;
                    ?>
                </section>


                <section class="chart">
                <?php
                    $data = [
                        'labels' => $zeiten,
                        'datasets' => [[
                            'data' =>$luftdruck,
                            'backgroundColor' => '#D3D3D3',
                            'borderColor' => '#A9A9A9',
                            'label' => 'Luftdruck'
                        ]]
                    ];
                    $options = [];
                    $attributes = ['id' => 'example', 'width' => 100, 'height' => 100];
                    $chart = new ChartJS('line', $data, $options, $attributes);

                    // Echo your line
                    echo $chart;
                    ?>

                </section>



                <section class="chart">
                <?php
                    $data = [
                        'labels' => $zeiten,
                        'datasets' => [[
                            'data' =>$luftfeuchtigkeit,
                            'backgroundColor' => '#D3D3D3',
                            'borderColor' => '#A9A9A9',
                            'label' => 'Luftfeuchtigkeit'
                        ]]
                    ];
                    $options = [];
                    $attributes = ['id' => 'example', 'width' => 100, 'height' => 100];
                    $chart = new ChartJS('line', $data, $options, $attributes);

                    // Echo your line
                    echo $chart;
                    ?>

                </section>



                <section class="chart">
                <?php
                    $data = [
                        'labels' => $zeiten,
                        'datasets' => [[
                            'data' =>$licht,
                            'backgroundColor' => '#D3D3D3',
                            'borderColor' => '#A9A9A9',
                            'label' => 'Licht'
                        ]]
                    ];
                    $options = [];
                    $attributes = ['id' => 'example', 'width' => 100, 'height' => 100];
                    $chart = new ChartJS('line', $data, $options, $attributes);

                    // Echo your line
                    echo $chart;
                    ?>

                </section>
                </section>

            </section>

    </main>
<script>
      (function() {
        loadChartJsPhp();
      })();
    </script>

</body>

</html>
