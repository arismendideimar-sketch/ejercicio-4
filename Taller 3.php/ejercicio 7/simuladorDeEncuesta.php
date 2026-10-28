<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Encuesta Estadistica</title>
</head>
<body>
    <form action="" method="POST">
        <label for="encuestados">Numero de encuestados:</label>
        <input type="number" name="encuestados" id="encuestados" required min="1">
        <input type="submit" name="procesar" value="Iniciar Encuesta">
    </form>

    <?php
    if (isset($_POST['procesar'])) {
        $totalEncuestados = intval($_POST['encuestados']);
        $sumaPregunta1 = 0;

        for ($e = 1; $e <= $totalEncuestados; $e++) {    
            $respuestasP1 = rand(1, 5); 
            $sumaPregunta1 += $respuestasP1;
        }

        $promedioP1 = $sumaPregunta1 / $totalEncuestados;
        echo "<h3>Resultados para $totalEncuestados encuestados (10 preguntas):</h3>";
        echo "<p>El promedio de calificacion obtenido en la Pregunta 1 es: <strong>" . number_format($promedioP1, 2) . " / 5.0</strong></p>";
    }
    ?>
</body>
</html>