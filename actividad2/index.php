<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Captura de datos!</title>
    <link rel="stylesheet" href="css/stile.css">
</head>
<body>
   <div class="dive">
    <h1>¡Captura de datos personales!</h1><br>
    <h2>Ingresa los datos que se te piden</h2><br>
    <p>Mi primera encuesta</p>
    <hr>
    <form action="resultados.php" method = "POST">
        <label for="Name">Nombre</label>
        <input type="text" id="Name" name="Name" value="Ingresa tu nombre"><hr>
        <label for="Age">Edad</label>
        <input type="number" id="Age" name="Age" value="Ingresa tu Edad"><hr>
        <label for="City">Ciudad donde vives</label>
        <input type="text" id="City" name="City" value="Ingresa tu ciudad donde vives"><hr>
        <label for="Britday">Fecha de cumpleaños</label>
        <input type="date" id="Britday" name="Britday"><hr>
        <label for="Hobie">Pasatiempo favorito</label>
        <input type="text" id="Hobie" name="Hobie" value="Ingresa tu Pasatiempo favorito"><hr>            
        <button type="submit">¡Ingresamos datos!</button>
    </form>
   </div>
</body>
</html>