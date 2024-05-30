<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos</title>
</head>
<body>
    <h2>Ingresa los datos requeridos:</h2>
    <form action="procesar_datos.php" method="POST">
        <label for="tamano_lote">Tamaño de Lote:</label>
        <input type="text" id="tamano_lote" name="tamano_lote" required><br><br>
        
        <label for="costo_inventario">Costo de Mantener una Pieza en el Inventario:</label>
        <input type="text" id="costo_inventario" name="costo_inventario" required><br><br>
        
        <label for="tasa_produccion">Tasa de Producción Diaria:</label>
        <input type="text" id="tasa_produccion" name="tasa_produccion" required><br><br>
        
        <label for="demanda_diaria">Demanda Diaria:</label>
        <input type="text" id="demanda_diaria" name="demanda_diaria" required><br><br>
        
        <label for="demanda_anual">Demanda Anual:</label>
        <input type="text" id="demanda_anual" name="demanda_anual" required><br><br>
        
        <input type="submit" value="Calcular">
    </form>
</body>
</html>