<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Manipulación de Datos</title>
</head>
<body>
    <form action="" method="POST">
        <label for="numero">Digite un número entero:</label>
        <input type="number" name="numero" id="numero" required>
        <input type="submit" name="calcular" value="Calcular">
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $num = intval($_POST['numero']);

        // 1. Invertir el número
        $numInvertido = strrev((string)$num);
        echo "<p>El número invertido es: <strong>$numInvertido</strong></p>";

        // 2. Contar números primos de 1 hasta el número digitado
        $contadorPrimos = 0;
        for ($i = 1; $i <= $num; $i++) {
            $esPrimo = true;
            if ($i <= 1) {
                $esPrimo = false;
            } else {
                for ($j = 2; $j <= sqrt($i); $j++) {
                    if ($i % $j === 0) {
                        $esPrimo = false;
                        break;
                    }
                }
            }
            if ($esPrimo) {
                $contadorPrimos++;
            }
        }
        echo "<p>Cantidad de números primos entre 1 y $num: <strong>$contadorPrimos</strong></p>";
    }
    ?>
</body>
</html>