<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Número</title>
</head>
<body>
    <h1>Código para verificar se o número é positivo, negativo ou neutro (zero)</h1>

    <?php
        // Definir o número a ser verificado
        $num = 0;  // Substitua pelo número desejado

        // Verificar se o número é positivo, negativo ou neutro
        if ($num > 0) {
            echo "O número informado é positivo.";
        } elseif ($num < 0) {
            echo "O número informado é negativo.";
        } else {
            echo "O número informado é neutro (zero).";
        }
    ?>
</body>
</html>
