<?php

session_start();

$frase1 = $_SESSION["frase1"];
$frase2 = $_POST["frase2"];

$paraules1 = explode(" ", $frase1);
$paraules2 = explode(" ", $frase2);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Exercici 4.2</title>
</head>
<body>

    <h1>COINCIDÈNCIES</h1>

    <a href="ex42pagina1.php">Tornar</a>

    <br><br>

    <?php

    $hiHaCoincidencia = false;

    for ($i = 0; $i < count($paraules1); $i++) {

        $comptador = 0;

        for ($j = 0; $j < count($paraules2); $j++) {

            if ($paraules1[$i] == $paraules2[$j]) {

                $comptador++;
            }
        }

        if ($comptador > 0) {

            $hiHaCoincidencia = true;

            echo "La paraula " . $paraules1[$i] . " s'ha repetit " . $comptador . " vegades.<br>";
        }
    }

    if ($hiHaCoincidencia == false) {

        echo "No hi ha cap coincidència.";
    }

    ?>

</body>
</html>