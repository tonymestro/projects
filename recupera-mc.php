<?php

//recebe o ip do usuario conectado e remove os pontos
$ip = str_replace('.', '', $_SERVER['REMOTE_ADDR']);
$key = $ip;

//abre um espaço na memoria com o 
//nome/chave passado como parametro
$memory = shm_attach($key);
//se houver uma variael naquela
//memoria com aquele nome então:
if (shm_has_var($memory, $key)) {
    //pega o valor da variavel
    $return = shm_get_var($memory, $key);
    //imprime já codificada em json
    echo $return;
    //e remove a variavel/valor da memoria
    shm_remove_var($memory, $key);
}
//fecha a memoria aberta
shm_detach($memory);
