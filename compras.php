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
    <form action="procesar_datos_compra.php" method="POST">
        <h2>Compras</h2>
        <label for="demanda_anual">Demanda Anual:</label>
        <input type="text" id="demanda_anual" name="demanda_anual" required>

        <label for="costo_preparar_pedido">Costo de preparar Pedido:</label>
        <input type="text" id="costo_preparar_pedido" name="costo_preparar_pedido" required>

        <label for="costo_inventario">Costo de Mantener una Pieza en el Inventario (porcentaje):</label>
        <input type="text" id="costo_inventario" name="costo_inventario" required>

        <label for="unidad_costo_inventario">Unidad de Costo Inventario:</label>
        <select id="unidad_costo_inventario" name="unidad_costo_inventario" required>
            <option value="dia">Día</option>
            <option value="mes">Mes</option>
            <option value="anio">Año</option>
        </select>

        <label for="costo_pieza">Costo por unidad:</label>
        <input type="text" id="costo_pieza" name="costo_pieza" required>

        <label for="dias_laborales">Días laborales:</label>
        <input type="text" id="dias_laborales" name="dias_laborales" value="360" required>

        <label for="tiempo_entrega">Tiempo de Entrega:</label>
        <input type="text" id="tiempo_entrega" name="tiempo_entrega" required>

        <input type="submit" value="Calcular">
        <a href="menu.php" class="uaemex-button">Volver a menu</a>
    </form>
</body>

</html>