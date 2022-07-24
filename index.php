<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/scss/bootstrap-grid.scss">
    <title></title>

    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>



    <div class="row container-fluid text-center">

        <h1>Convertendo temperatura</h1>

        <form action="processa.php" method="post">

            Selecione 1 para: Celsius para Farenheit<br />
            selecione 2 para: Farenheit para Celsius<br />

            <select name="valor" id="">

                <option value="valor1">Valor 1</option>
                <option value="valor2" selected>Valor 2</option>

            </select>

            <div>
                <input type="text" name="temp" id="temp">
            </div>

            <div>
                <input type="submit" value="enviar">
            </div>

        </form>
    </div>

    </div>



</body>

</html>