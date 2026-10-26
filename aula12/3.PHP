
<?php

$peso = 70;
$altura = 1.75;

$imc = $peso / ($altura * $altura);

echo "<h2>3. Cálculo do IMC</h2>";
echo "Peso: $peso kg <br>";
echo "Altura: $altura m <br>";
echo "Seu IMC é: " . number_format($imc, 2, ',', '.') . "<br>";

?>
