<!DOCTYPE html>
<html lang=de>

<?php $pdo = new PDO('mysql:host=localhost;dbname=sschuelersql2', 'sschuelersql2', 'umgizaeobg');?>

<head>
    <meta charset="utf-8">
    <title>The Weather</title>
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0, shrink-to-fit=no">

    <link href="css/style.css" rel="stylesheet">

    <body style="background-image:url(hintergrund.jpg)" class="hintergrund">

</head>

<body>

    <header class="site-header">

        <section class="headbox">
        <h1 class="main-headline">The Weather</h1>
        <section class="new">
            <a href="upload.php"a>Add Data</a>
        </section>
        </section>

    </header>


    <main>

        <section class="uebersicht">
                
            
                    <?php $sql= "SELECT * FROM weather GROUP BY datum";
                    
                    foreach ($pdo->query($sql) as $row) { 
                        
                    $datum = $row['datum'];
                    $wochentage = array("Sonntag", "Montag", "Dienstag",
                    "Mittwoch", "Donnerstag", "Freitag", "Samstag");
                    $zeit = strtotime($datum);
                    ?>

                    <section class="outline">

                    <section class="infokasten">

                    <section class="headline">
                    <h2 class="date"><?php echo $wochentage[date("w", $zeit)],
                    date(" d.m.y", $zeit);?></h2>
                    </section>
                    
                    

                    <section class="linkbox">

                        <section class="details">
                            <a href="details.php?datum=<?php echo $row['datum']?>
                            ">Details</a>
                        </section>

                    </section>

                    </section>

                    </section>

                    <?php } ?>


        </section>

    </main>

</body>

</html>