<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Cálculos:</h1>
    </header>

    <?php
    $num = 9;
    $num2 = 5;
    $sumatoria = $num + $num2;

    print "Numero 1: " . $num . "<br/>";
    print "Numero 2: " . $num2 . "<br/>";



    print "La sumatoria de numero 1 + numero 2 es " . $sumatoria;

    $i = 10;
    while ($i <= 0) {
        echo $i . " ";
        $i++;
    }

    echo "<br/>";

    ?>

    <?php
    echo "Hecho con while <br/>";
    $i = 10;
    while ($i <= 0) {
        echo $i . " ";
        $i++;
    }
    echo "Hecho con for <br/>";

    for ($i = 1; $i <= 10; $i++) {
        echo $i . " ";
    }

    ?>
</body>

</html>