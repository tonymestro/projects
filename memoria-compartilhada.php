<?php 

//função para criar memória compartilhada
//recebe como parametro a chave da memória
//e a mensagem que queira guardar (array)
function createMemory($key, $message){
    //transforma a mensagem de array
    //para um string em formato de json
    $data_json = json_encode($message);
    //abre um espaço na memoria com o 
    //nome/chave passado como parametro
    $memory = shm_attach($key);
    //coloca na memoria aberta o nome da 
    //variavel e o valor 
    shm_put_var($memory, $key, $data_json);
    //fecha a memoria aberta
    shm_detach($memory);
}