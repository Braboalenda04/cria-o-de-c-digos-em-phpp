<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Número Redondo</title>
</head>
<body>
    <h1>Código para verificar se o número é redondo (inteiro)</h1>

    <?php
        $num = 7.5;  // Substitua pelo número desejado

        if (is_int($num)) {
            echo "O número informado é redondo (inteiro).";
        } else {
            echo "O número informado não é redondo (não é inteiro).";
        }
    ?>
</body>
</html>