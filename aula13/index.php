
<?php

$quantidade = 5;
$valorItem = 20.00;

$total = $quantidade * $valorItem;

echo "<h2>Total dos itens vendidos</h2>";
echo "Quantidade de itens: $quantidade <br>";
echo "Valor de cada item: R$ " . number_format($valorItem, 2, ',', '.') . "<br>";
echo "Total da venda: R$ " . number_format($total, 2, ',', '.');

?>
