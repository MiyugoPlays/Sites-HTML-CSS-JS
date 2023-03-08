<?php
$etanol=$_GET["etanol"];
$gasolina=$_GET["gasolina"];

echo "O valor do etanol é $etanol<br>";
echo "O valor da gasolina é $gasolina<br>";

$resultado=$etanol/$gasolina;
echo "O resultado é $resultado<br>";

if($resultado<0.7)
echo "Abasteça com Etanol";
else
echo "Abasteça com Gasolina";
?>