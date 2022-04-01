<?php
// pega dados do formulário 
$produto = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_SPECIAL_CHARS);
$valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_SPECIAL_CHARS);
$estoque = filter_input(INPUT_POST, 'estoque', FILTER_SANITIZE_SPECIAL_CHARS);

// escreve dados no final do arquivo txt (FILE_APPEND)
if ($produto) {
   file_exists("cadastro.txt") ? $text1 =  "\n".$produto : $text1 = $produto;
   file_put_contents('cadastro.txt', $text1, FILE_APPEND);    
}
if ($valor) {
   file_exists("cadastro.txt") ? $text2 =  "\n".$valor : $text2 = $valor;
   file_put_contents('cadastro.txt', $text2, FILE_APPEND);
}
if ($estoque) {
   file_exists("cadastro.txt") ? $text3 =  "\n".$estoque : $text3 = $estoque;
   file_put_contents('cadastro.txt', $text3, FILE_APPEND);  
}

header('Location: index.php');