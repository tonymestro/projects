<?php

// require_once ''

$ip = str_replace('.', '', $_SERVER['REMOTE_ADDR']);

echo readMemory($ip);

function readMemory($ip)
{
    $shm_id = shmop_open($ip, "w", 0600, 0);
    $return = shmop_read($shm_id, 0, 0);
    $data = unserialize($return);
    echo json_encode($data);
}
// $shm_id = shmop_open(187102863, "w", 0600, 0);
// $return = shmop_read($shm_id, 0, 0);
// $data = unserialize($return);
// echo json_encode($data);
// $data = null;
// $erase = shmop_write($shm_id, '', 0);
