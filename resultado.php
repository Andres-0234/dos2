<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Registro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Resultados del Registro</h1>
        <h2>Datos del Estudiante</h2>
        <div class="alert alert-info">
            <?php

                $nombre = htmlspecialchars($_POST['name'] ?? 'No definido');
                $estadoCivil = htmlspecialchars($_POST['estado_civil'] ?? 'No definido');
                $edad = htmlspecialchars($_POST['number'] ?? 'No definido');
                $estudios = htmlspecialchars($_POST['estudios'] ?? 'No definido');
                
                $hobbie = isset($_POST['hobbie']) ? $_POST['hobbie'] : [];
                $hobbiesTexto = empty($hobbie) ? '' : implode(', ', $hobbie);
                
                echo "Su nombre es <strong>$nombre</strong>.<br>";
                echo "Su estado civil es <strong>$estadoCivil</strong>.<br>";
                echo "Le gusta(n) <strong>$hobbiesTexto</strong>.<br>";
                echo "Su edad es <strong>$edad</strong> años.<br>";
                echo "Estudia en <strong>$estudios</strong>.";
            ?>
        </div>
        <a href="index.php" class="btn btn-primary">Regresar</a>
    </div>
</body>
</html>
