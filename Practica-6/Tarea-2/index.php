<?php
// Estamos verificando el formulario.
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['color_fons'])) {
    $color_seleccionado = $_POST['color_fons'];
    // Si selecciona un color, ese color sera guardado durante un 1 dia
    setcookie('color_fons', $color_seleccionado, time() + 86400); 
    header("Location: " . $_SERVER['PHP_SELF']); 
    exit();
}

//  Le estamos diciendo que si la cookie tiene color elegido previamente que lo ponga, si no hay cookie actualizada que ponga un blanco.
$color_fons = isset($_COOKIE['color_fons']) ? $_COOKIE['color_fons'] : '#ffffff'; 
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferència de color</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
            background-color: <?= htmlspecialchars($color_fons) ?>;
        }
        h1 {
            color: #2c3e50;
        }
        label, select, button {
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <h1>TRIA EL TEU COLOR PREFERIT</h1>
    <form method="post">
        <label for="color_fons">Quin color de fons voldries tenir?</label>
        <select name="color_fons" id="color_fons">
            <option value="#3498db" <?= $color_fons === '#3498db' ? 'selected' : '' ?>>Blau</option>
            <option value="#2ecc71" <?= $color_fons === '#2ecc71' ? 'selected' : '' ?>>Verd</option>
            <option value="#f1c40f" <?= $color_fons === '#f1c40f' ? 'selected' : '' ?>>Groc</option>
            <option value="#e74c3c" <?= $color_fons === '#e74c3c' ? 'selected' : '' ?>>Vermell</option>
            <option value="#ffffff" <?= $color_fons === '#ffffff' ? 'selected' : '' ?>>Blanc</option>
        </select>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
