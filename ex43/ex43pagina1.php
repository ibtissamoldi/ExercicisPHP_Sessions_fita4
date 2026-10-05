<!DOCTYPE html>
<html>
<head>
    <style>
     
        textarea {
            width: 100%;
            height: 100px;
            font-size: 20px;
            margin-bottom: 15px;
            padding: 8px;
        }
        .teclado {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
        }
        button {
            padding: 8px;
            font-size: 16px;
            background-color: yellow;
        }

    </style>
</head>
<body>

<?php
session_start();

$_SESSION['texto'] .= $_GET["tecla"];
?>

    <textarea>

    <?php
    echo $_SESSION['texto'];
    ?>
   
    </textarea>

    <div class="teclado">
        <?php
        for ($i = 65; $i <= 90; $i++) {
            $letra = chr($i);
            echo '<button onclick="document.location=\'?tecla=' . $letra . '\';">' . $letra . '</button>';
        }
        ?>
    </div>

</body>
</html>