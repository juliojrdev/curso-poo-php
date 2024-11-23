<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - PHP POO</title>
</head>
<body>
    <?php 
        require_once __DIR__ . '../classes/Caneta.php';

        $c1 = new Caneta();
        $c1->modelo = "Bic Crystal";
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->carga = 90;
        $c1->tampada = true;
        
        var_dump($caneta1);

        $caneta1->rabiscar();

        $caneta1->destampar();

        $caneta1->rabiscar(); 

        $c2 = new Caneta();
        $c2->modelo = "Bic Crystal";
        $c2->cor = "Vermelha";
        $c2->ponta = 1.0;
        $c2->carga = 50;
        $c2->tampada = false;

        echo "<p></p>";

        var_dump($c2);
    ?>
</body>
</html>