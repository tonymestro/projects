<?php 

$dados = '';
function createMemory($ip, $message){
    $key = $ip;
    $memory = shmop_open($key, "c", 0600, 16 * 1024);
    $data = $message;
    $bytes = shmop_write($memory, serialize($data), 0);
    // $return = shmop_read($memory, 0, $bytes);
    // $dados = unserialize($return);
    // echo json_encode($dados);
}