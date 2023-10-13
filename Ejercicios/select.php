<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
</head>

<body>
    <header>
        <h1>HOLA MUNDO</h1>
    </header>
    <?php
    echo "Hola mundo";
    ?>
    <?php

    $ruta = "Ejercicios/img/select.jpg";


    ?>
    <img src="<?php echo $ruta; ?>" alt="">

    <select name="" id="">
        <?php

        for ($i = 1; $i <= 10; $i++) {
            echo '<option value="' . $i . '">' . $i . '</option>';
        }

        ?>


    </select>

</body>

</html>