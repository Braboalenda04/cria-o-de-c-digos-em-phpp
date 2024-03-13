<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par, Ímpar e Inteiro</title>
</head>
<body>
    <h1>Código para verificação de número inteiro e não inteiro </h1>

    <?php
        $num = 4;

        if (is_int($num)) {
            echo "O número informado é um inteiro. ";

        } else {
            echo "O número informado não é um inteiro.";
        }
    ?>
</body>
</html>
