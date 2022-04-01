<?php
// exclui arquivo tarefas.txt
if (file_exists("cadastro.txt")) {
    unlink('cadastro.txt');
}    

header('Location: index.php');