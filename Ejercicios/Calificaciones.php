<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>CALIFICACIONES</h1>
    </header>
    <fieldset>
        <legend>Programa 12 PHP</legend>
        <form action="Calificaciones.php" method="post">
            <p>Nota 1:<input type="text" name="txtName1"></p>
            <p>Nota 2:<input type="text" name="txtName2"></p>
            <p>Nota 3:<input type="text" name="txtName3"></p>
            <p><input type="submit" value="Calcular"></p>
        </form>
    </fieldset>

    <?php
    if ($_POST) {
        $n1 = $_POST["txtName1"];
        $n2 = $_POST["txtName2"];
        $n3 = $_POST["txtName3"];
        if ($n1 < 0 || $n1 > 5) {
            print "El valor de la nota 1 es incorrecto";
        } else if ($n2 < 0 || $n2 > 5) {
            print "El valor de la nota 2 es incorrecto";
        } else if ($n3 < 0 || $n3 > 5) {
            print "El valor de la nota 3 es incorrecto";
        } else {
            $prom = ($n1 + $n2 + $n3) / 3;
            print "El promedio es " . $prom . "<br>";

            if ($prom >= 3) {
                print "Gana la materia";
                if ($prom == 5) {
                    print " Congratulation";
                }
            } else {
                print "Pierde la materia";
            }
        }
    }
    ?>

</body>

</html>