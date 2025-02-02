<?php
$name = $_POST['Name'];
$age = $_POST['Age'];
$city = $_POST['City'];
$britday = $_POST['Britday'];
$hobie = $_POST['Hobie'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Resultados de datos!</title>
    <link rel="stylesheet" href="css/stile.css">
</head>
<body>
    <div class="dive2">
        <center>
            <h1>Resultados</h1>
            <img src="img/stich.jpg" alt="stich" width="400">
            <h2>¡Bien Hecho!</h2>
            <?php
            echo '<p><b>Nombre: </b>'.$name. '</p>';
            echo '<p><b>Edad: </b>'.$age. '</p>';
            echo '<p><b>Ciudad: </b>'.$city. '</p>';
            echo '<p><b>Fecha de nacimiento: </b>'.$britday. '</p>';
            echo '<p><b>Pasatiempo: </b>'.$hobie. '</p>';
            ?>
            <div id = "popUpOverlay"></div>
            <div id = "popUpBox">
                <div id= "box">
                    <i class="fas fa-question-circle fa-5x"></i>
                    <h1>¿Volver a ingresar datos?</h1>
                    <div id= "closeModal" ></div>
                </div>
            </div>
            <button onclick = "Alert.render('you look very pretty today.')" class="btn">¡Volver a Ingresar!</button>
            <script src = "js/app.js"></script>
        </center>
        
    </div>
</body>
</html>