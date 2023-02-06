<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }
        
        h1{
            font-size: 2.8em;
        }
        
        p{
            font-size: 2em;
        }
    </style>
</head>
<body>
    <h1>Exemplo de Php.</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "<p>Hoje é dia " . date("d/M/Y");
        echo " e a hora atual é: " . date("G:i:s") . ".</p>";     
    ?>
</body>
</html>