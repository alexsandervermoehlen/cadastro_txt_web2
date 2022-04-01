<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // pega dados do arquivo tarefas.txt e coloca na tela
    if (file_exists("cadastro.txt")) {
        $lista = file_get_contents("cadastro.txt");
        $lista_array = explode("\n", $lista);
        foreach($lista_array as $lista_item) {
            echo $lista_item.'<br/>';
        }
    } else {
        $lista = null;
    }

    ?>
    <button><a href="index.php">Voltar</button>
</body>
</html>