<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - PHP POO</title>
</head>
<body>
    <?php 
        require __DIR__ . '../classes/Caneta.php';

        $c1 = new Caneta();
        $c1->modelo = "BIC Crystal";

        var_dump($c1);
    ?>
</body>
</html>