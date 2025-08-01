<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $uploadDir = __DIR__ . '/uploads';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $file = $_FILES['file'];
    $target = $uploadDir . '/' . basename($file['name']);

    if (move_uploaded_file($file['tmp_name'], $target)) {
        echo "<p>Archivo subido correctamente: " . htmlspecialchars($file['name']) . "</p>";
        echo "<p><a href=\"index.php\">Volver</a></p>";
    } else {
        echo "<p>Error al subir el archivo.</p>";
        echo "<p><a href=\"index.php\">Volver</a></p>";
    }
} else {
    echo "<p>Solicitud inválida.</p>";
    echo "<p><a href=\"index.php\">Volver</a></p>";
}
