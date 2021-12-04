<?php
$password = $_POST["password"];
if ($password == "projecttheweather")
{
    $pdo = new PDO('mysql:host=localhost;dbname=sschuelersql2', 'sschuelersql2', 'umgizaeobg');

    $tempFileName = time() . ".csv";
    if (is_uploaded_file($_FILES["uploadFile"]['tmp_name'])) {
        $fileUploaded = move_uploaded_file($_FILES["uploadFile"]
        ['tmp_name'], $tempFileName);
        if ($fileUploaded) {
            if (($handle = fopen($tempFileName, "r")) !== FALSE) {
                $row=0;
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    print_r($data);
                    if ($row > 0) {
                        try {
                            $sql = "INSERT INTO weather (datum, zeit,
                            temperatur, luftfeuchtigkeit, luftdruck, licht)
                            values ( :datum, :zeit, :temperatur,
                            :luftfeuchtigkeit, :luftdruck, :licht  ) ";
                            $stmt = $pdo->prepare($sql);
                            $stmt->bindValue(":datum", $data[5]);
                            $stmt->bindValue(":zeit", $data[4]);
                            $stmt->bindValue(":temperatur", $data[0]);
                            $stmt->bindValue(":luftfeuchtigkeit", $data[1]);
                            $stmt->bindValue(":luftdruck", $data[2]);
                            $stmt->bindValue(":licht", $data[3]);
                            $stmt->execute();
                        } catch (Exception $ex) {
                            echo($ex->getMessage());
                        }
                    }
                    $row++;
                }
            }
        }
    }
echo "<script>window.location.href='index.php';</script>";
exit;
}
else
{
    echo 'Passwort falsch! <br/>
    <a href="index.php" title=" Linktitel">Zurück</a><p/>';
}
