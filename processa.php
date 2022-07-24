<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <?php

    $opt = ($_POST['valor']);

    $temp = ($_POST['temp']);


    if ($opt == 'valor1') { ?>


        <div class="row container-fluid text-center">

            <div class="col-sm">

                <?= "Temperatura em Farenheit: " . (($temp * 9 / 5) + 32); ?>

            </div>

        </div>

    <?php } ?>

    <?php if ($opt == 'valor2') { ?>

        <div class="row container-fluid text-center">

            <div class="col-sm">

                <?= "Temperatura em Celsius: " . ($temp - 32) * 5 / 9; ?>

            </div>

        </div>

    <?php } else { ?>

        <div class="row container-fluid text-center">

            <div class="col-sm">

                <?= "Valor invalido"; ?>

            </div>

        </div>
    <?php }

    ?>

</body>

</html>