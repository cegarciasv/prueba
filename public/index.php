<?php
// Página de prueba: muestra info de PHP y un formulario para subir archivos.
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>App PHP de Prueba</title>
  <style>
    body { font-family: Arial, sans-serif; padding: 20px; }
    .box { border: 1px solid #ccc; padding: 15px; margin-bottom: 20px; border-radius: 8px; }
  </style>
</head>
<body>
  <h1>App PHP de Prueba en Docker / EasyPanel</h1>

  <div class="box">
    <h2>Información de PHP</h2>
    <?php phpinfo(); ?>
  </div>

  <div class="box">
    <h2>Subir archivo</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <label for="file">Elige un archivo:</label><br>
      <input type="file" name="file" id="file" required><br><br>
      <button type="submit">Subir</button>
    </form>
  </div>
</body>
</html>
