<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Salario</title>
    <link rel="stylesheet" href="css/salario.css">
    <link rel="stylesheet" href="css/link.css">
    <script src="js/modernizr.custom.lis.js"></script>
</head>
<body>
    <header id="inset">
        <h1>Detalle del salario</h1>
    </header>
    <section>
        <article>
            <?php
                if(isset($_POST['enviar'])){
                    $empleado=isset($_POST['empleado'])?$_POST['empleado']:"";
                    $sueldo=isset($_POST['sueldobase'])?$_POST[''];
                }
            ?>
        </article>
    </section>
</body>
</html>