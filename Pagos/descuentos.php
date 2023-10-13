<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Descuentos</title>
</head>

<body>
    <fieldset>
        <legend>Ingreso de datos</legend>
        <form action="descuentos.php" method="post">
            <p>Clave<input type="password" name="txtclave"></p>
            <input type="submit">
        </form>
        <?php
        if ($_POST) {
            $art_nombre = "Teresa";
            $art_precio = 7000;
            $clave = $_POST["txtclave"];
            if ($clave == "01") {
                $desc = $art_precio * 0.10;
                $tot = $art_precio - $desc;
                print "Articulo: " . $art_nombre . "<br>";
                print "El precio original" . $art_precio . "<br>";
                print "Descuento del 10%: " . $desc . "<br>";
                print "precio con descuento" . $tot . "<br>";
            } else if ($clave == "02") {
                $desc = $art_precio * 0.20;
                $tot = $art_precio - $desc;
                print "Articulo: " . $art_nombre . "<br>";
                print "El precio original" . $art_precio . "<br>";
                print "Descuento del 10%: " . $desc . "<br>";
                print "precio con descuento" . $tot . "<br>";
            } else {
                print "La clave es incorrecta";
            }
        }
        ?>
    </fieldset>

</body>

</html>