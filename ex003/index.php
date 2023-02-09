<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
        mark{
            font-weight: bold;
            background-color: transparent;
            color: black;
            font-size: 1.2em;
        }
        li {
            list-style: inside circle;
        }
    </style>
    <title>Variáveis e Constantes</title>
</head>
<body>
    <h1>Uso de Variáveis e Constantes</h1>
    <?php 
    $nome = "Jonathan";
    $sobrenome = "Girafalles";
    $idade = 2;
    $peso = 7;
    $castrado = "Sim";
    const ESPECIE = "Felino"; 

    echo "<ul><mark>Características do seu pet:</mark>
        <li>Nome = $nome;</li>
        <li>Sobreome = $sobrenome;</li>
        <li>Idade = $idade anos;</li>
        <li>Peso = $peso Kg;</li>
        <li>Castrado = $castrado;</li>
        <li>Espécie = ". ESPECIE . ".</li>
    </ul>";
    ?>
</body>
</html>