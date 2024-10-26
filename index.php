<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page DOS</title>
<!--css -->
<link rel="stylesheet" href="./css/style.css">
<!-- icono -->
<link rel="shortcut icon" href="img/ia.ico.png" type="image/x-icon">
<!-- google fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap"
        rel="stylesheet">
<!-- bootstrap css-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<!-- bootstrap js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- bootstrap js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    <form action="resultado.php" method="post" id="miFormulario">
    <h1><img src="./img/img.png" width="5%">Registro de Alumno</h1>
    <div class="container">
        <h2>Enviar Registro </h2>
        <form action="index.php" method="post" id="miFormulario">
            <label for=""><h6>Escriba su nombre:</h6></label><br>
            <input type="text" id="name" placeholder="Ingrese su nombre " name="name" required><br>

            <label for=""><h6>Estado Civil:</h6></label><br>
            <input type="radio" id="soltero" name="estado_civil" value="soltero" required>
            <label for="soltero">Soltero</label>
            <input type="radio" id="casado" name="estado_civil" value="casado" required>
            <label for="casado">Casado</label ><br>

            <label for=""><h6>Hobbie:</h6></label><br>
            <input type="checkbox" id="caminar" name="hobbie" value="caminar">
            <label for="caminar">Caminar</label>
            <input type="checkbox" id="futbol" name="hobbie" value="futbol">
            <label for="futbol">Futbol</label>
            <input type="checkbox" id="rutear" name="hobbie" value="rutear">
            <label for="rutear">Rutear</label><br>
            <label for=""><h6>Escriba Su edad:</h6></label><br>
            <input type="number" id="number" placeholder="Ingrese su edad" name="number" required><br>

            <label for=""><h6>¿Donde Estudias?</h6></label><br>
            <select id="estudios" name="estudios" required>
                <option value="senati">Senati</option>
                <option value="unia">Unia</option>
                <option value="suiza">Suiza</option>
                <option value="unu">Unu</option>
                <option value="fibonacci">Fibonacci</option> 
                <option value="utp">UTP</option>
            </select>
            <button type="submit" class="btn-lg btn-block">Enviar</button>
        </form>
    </form>
</body>
<script src="./js/main.js"></script>
</html>

