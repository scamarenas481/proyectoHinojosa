<?php
$D = $_POST['demanda_anual'];
$CP = $_POST['costo_preparar_pedido'];
$CH = $_POST['costo_inventario'];
$P = $_POST['tasa_produccion'];
$diasLaborales = $_POST['dias_laborales'];
$tiempoEntrega= 1;
$CT ;
$r ;
$d = $D / $diasLaborales;
$NP;
$IS;
$PR;
$t;
$Q =  sqrt(((2 * $D * $CP) / $CH) * ($P / ($P - $d)));
$CT = (((($Q/2)*$CH)*(($P-$d)/$P)) + (($D/$Q)*$CP));
$NP = $D/$Q;
$t = $diasLaborales / $NP;
$PR = $t - $tiempoEntrega;
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
            <p>Valor de Tamanio de Lote Optimo: <?php echo $Q; ?></p>
            <p>Valor de Coste Total: <?php echo $CT; ?></p>
            
        </div>
        <a href="menu.php" class="uaemex-button">Volver al Menú</a>
        <a href="produccion.php" class="uaemex-button">Realizar Nuevo Cálculo</a>
    </div>
</body>
</html>