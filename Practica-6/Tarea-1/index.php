<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comptador de Visites</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        h1 {
            color: #000;
        }
        p {
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <h1>Comptador de Visites amb Sessions</h1>
    <?php
    // Lo que le estamos diciendo es, que si hay una nueva visita sume al contador de num_visites lo sume y salga por pantalla con texto.
    if (isset($_SESSION['visites'])) {
        $_SESSION['visites']++; 
        $num_visites = $_SESSION['visites'];
        echo "<p>Benvingut/da de nou! Aquesta és la teva visita número $num_visites durant aquesta sessió.</p>";
    // Lo que le estamos diciendo es que si no hay visitas registradas printe un mensaje por pantalla diferente dando la bienvenida.
    } else {
        $_SESSION['visites'] = 1; 
        echo "<p>Benvingut/da! Aquesta és la teva primera visita durant aquesta sessió.</p>";
    }
    ?>
    <!-- Contador de las visitas -->
    <p>Total visites: <?= $_SESSION['visites'] ?></p>
</body>
</html>
