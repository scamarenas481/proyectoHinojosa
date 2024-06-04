<?php
$D = $_POST['demanda_anual'];
$CP = $_POST['costo_preparar_pedido'];
$CH ;
$unidadCostoInventario = $_POST ['unidad_costo_inventario'];
$ci= $_POST ['costo_inventario'];
$Cp = $_POST ['costo_pieza'];
$CH = (($ci/100)*$CP);
$diasLaborales = $_POST['dias_laborales'];
$tiempoEntrega= $_POST['tiempo_entrega' ];
// Calcular $ciporcentaje
$ciporcentaje = $ci / 100;
if ($unidadCostoInventario === "dia") {
  $frecuencia = $diasLaborales;
} else if ($unidadCostoInventario === "mes") {
  $frecuencia = 12;
} else if ($unidadCostoInventario === "anio") {
  $frecuencia = 1;
}
$CH = $ciporcentaje * $frecuencia* $Cp;
$CT ;
$r ;
$d = $D / $diasLaborales;
$NP;
$IS;
$PR;
$t;
$Q =  sqrt(((2 * $D * $CP) / $CH));
$CT = ((($Q/2)*$CH)+(($D/$Q)*$CP));
$NP = $D/$Q;
$t = $diasLaborales / $NP;
$PR = abs( $t - $tiempoEntrega);
$IS = (($Q * $tiempoEntrega)/$t);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Cálculo</title>
        <link rel="stylesheet" href="css/estilosUAEMEX.css">
    <style>
        /* Aquí puedes incluir los estilos de la UAEMEX */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #006532;
        }
        .result {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Resultados del Cálculo</h2>
        <div class="result">
            <p>Valor de Tamanio de Lote: <?php echo $Q; ?></p>
            <p>Valor de Coste Total: <?php echo $CT; ?></p>
            <p>Valor de Numero de Pedidos al año: <?php echo $NP; ?></p>
            <p>Valor de Punto de Reorden: <?php echo $PR; ?></p>
            <p>Valor de Inventario de Seguridad: <?php echo $IS; ?></p>
        </div>
        <a href="menu.php" class="uaemex-button">Volver al Menú</a>
        <a href="compras.php" class="uaemex-button">Realizar Nuevo Cálculo</a>
    </div>
</body>
</html>