<?php
// conecta ao banco de dados lanches

include "conexao.php";



// cria um comando sql
$sql = 'INSERT INTO aluno (matricula,nomeAluno, foneAluno) VALUES '
        . '(' . $_POST['matricula'] . ', '
        . '"'.$_POST['nomeAluno'] . '", '
        . '"' . $_POST['foneAluno'] . '")';

// envia o comando para o banco de dados e recebe
// os dados de volta
$gravado = mysqli_query($connection, $sql);

// se gravou com sucesso
if ($gravado == true) {
    // redireciona para a index.php

    echo "<script>alert('Aluno cadastrado com sucesso!');". 
    
    "javascript:window.location='index.php';</script>";

} else {
    // se não gravou
    echo "Erro ao gravar Usuário!<br>";
    echo $sql . "<br>";
    echo mysqli_error($connection);
    // mata a execução do php
    die();
}

// fecha a conexão com o banco de dados
mysqli_close($conection);
?>