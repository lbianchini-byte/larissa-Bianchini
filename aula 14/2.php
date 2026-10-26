
<?php

$nome = "João";
$nota1 = 8;
$nota2 = 7;
$nota3 = 9;

$media = ($nota1 + $nota2 + $nota3) / 3;

$resultado = ($media >= 7) ? "Aprovado" : "Reprovado";

echo "Nome do aluno: $nome <br>";
echo "Primeira nota: $nota1 <br>";
echo "Segunda nota: $nota2 <br>";
echo "Terceira nota: $nota3 <br>";
echo "Média do aluno: " . number_format($media, 2, ',', '.') . "<br>";
echo "Situação: $resultado";

?>
