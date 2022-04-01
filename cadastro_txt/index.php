<h1>Manipulando arquivo txt</h1> 
<form method="POST" action="receive.php">
    <input type="text" name="produto" placeholder="Digite o produto" />
    <input type="text" name="valor" placeholder="Digite o valor" />
    <input type="text" name="estoque" placeholder="Digite a quantidade em estoque" />
    <input type="submit" value="Enviar">    
</form>
<?php

// pega dados do arquivo txt e coloca na tela
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
<br/>
<!--deleta o arquivo txt -->
<button onclick="window.location.href = 'delete.php'">Excluir Lista</button>
<button><a href="lista.php">Listar</button>
<button><a href="edita.php">Editar</button>