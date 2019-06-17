<?php
//inicia a sessão e define como uma
//sessão unica setando o id
session_id("session1");
session_start();

//coloca o array da sessão na variável
$resultado = $_SESSION['json'];

//envia a variável no formato json
echo json_encode($resultado);

//após o envio apaga e destrói
//a sessão removendo os valores 
//anteriores
session_unset();
session_destroy();
