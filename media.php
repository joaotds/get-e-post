<?php

echo "dados recebidos por GET". "<br>";

$numero1 = $_GET["numero1"];
echo "Numero 1: " . $numero1 . "<br>";

$numero2 = $_GET["numero2"];
echo "Numero 2: " . $numero2 . "<br>";

$numero3 = $_GET["numero3"];
echo "Numero 3: " . $numero3 . "<br>";

$media = ($numero1 + $numero2 + $numero3) / 3;

echo "media aritimetica: " . $media . "<br>";




