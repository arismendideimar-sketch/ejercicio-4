<?php
if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    echo "<h1>Hola instructor " . htmlspecialchars($nombre) . ".</h1>";
}
?>