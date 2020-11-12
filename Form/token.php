<?php

    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $result = '';
    $codigo = '';
    for ($i = 0; $i < 10; $i++)
        $result .= $characters[mt_rand(0, 61)];
        $codigo = $result;

    echo $codigo;

?>