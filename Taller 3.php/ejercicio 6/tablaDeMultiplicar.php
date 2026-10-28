<?php
echo "<h3>Tabla del 4 usando FOR (incremento de 2 en 2)</h3>";
for ($i = 2; $i <= 10; $i += 2) {
    $resultado = 4 * $i;
    echo "4 x $i = $resultado<br>";
}

echo "<hr>";

echo "<h3>Tabla del 4 usando WHILE</h3>";
$j = 1;
while ($j <= 10) {
    $resultado = 4 * $j;
    echo "4 x $j = $resultado<br>";
    $j++;
}
?>