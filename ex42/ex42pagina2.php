<?php

session_start();

$_SESSION["frase1"] = $_POST["frase1"];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Exercici 4.2</title>
</head>
<body>

    <h1>ENREGISTRA FRASE 2</h1>

    <form method="POST" action="ex42pagina3.php">

        <input type="text" name="frase2">

        <input type="submit" value="Enviar">

    </form>

</body>
</html>