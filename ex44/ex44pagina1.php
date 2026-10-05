<?php

session_start();

if (!isset($_SESSION["notes"])) {
    $_SESSION["notes"] = "";
}

if (isset($_POST["text"])) {

    $_SESSION["notes"] .= $_POST["text"];
    $_SESSION["notes"] .= "\n\n";
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ejercicio 4.4</title>
</head>
<body>

    <h1>NOTES</h1>

    <form method="POST">

        <textarea name="text"></textarea>

        <br><br>

        <input type="submit" value="Enviar">

    </form>

    <br>

    <?php

    $linies = explode("\n", $_SESSION["notes"]);

    for ($i = 0; $i < count($linies); $i++) {

        echo $linies[$i] . "<br>";

    }

    ?>

</body>
</html>