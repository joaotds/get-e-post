<?php

echo "dados recebidos por POST" . "<br>";

    $numero1 = $_POST["numero1"];
    echo "Numero 1: " . $numero1 . "<br>";

    $numero2 = $_POST["numero2"];
    echo "Numero 2: " . $numero2 . "<br>";

    $numero3 = $_POST["numero3"];
    echo "Numero 3: " . $numero3 . "<br>";

    $media = ($numero1 + $numero2 + $numero3) / 3;

    echo "media aritmetica: " . $media . "<br>";

?>
