<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilosUAEMEX.css">
    <style>
        /* Estilos adicionales específicos para el formulario */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        form {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        select {
            width: 50%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #006532;
            color: #ffc107;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px 0;
            cursor: pointer;
        }

        h2 {
            color: #006532;
        }
    </style>
</head>

<body>
    <h2>Ingresa los datos requeridos:</h2>
    <form action="procesar_datos_produccion.php" method="POST">
        <h2>Produccion</h2>
        <label for="demanda_anual">Demanda Anual:</label>
        <input type="text" id="demanda_anual" name="demanda_anual" required><br><br>

        <label for="costo_preparar_pedido">Costo de colocar Pedido:</label>
        <input type="text" id="costo_preparar_pedido" name="costo_preparar_pedido" required><br><br>

        <label for="costo_inventario">Costo de Mantener una Pieza en el Inventario(anual):</label>
        <input type="text" id="costo_inventario" name="costo_inventario" required><br><br>

        <label for="tasa_produccion">Tasa de Producción Diaria:</label>
        <input type="text" id="tasa_produccion" name="tasa_produccion" required><br><br>

        <label for="dias_laborales">Dias laborales:</label>
        <input type="text" id="dias_laborales" name="dias_laborales" value="360"required><br><br>


        <input type="submit" value="Calcular">
        <a href="menu.php" class="uaemex-button"> Volver al Menú</a>
    </form>
</body>

</html>