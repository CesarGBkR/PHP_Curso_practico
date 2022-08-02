<?php

    $palabras = array("sol", "luna", "cielo");
    $palabras_desordenadas = array();

    for ($i=0; $i < 3; $i++) { 
        $palabras_desordenadas[$i] = str_shuffle($palabras[$i]);
    }

    print_r($palabras_desordenadas);
    echo "
    <form action='analisis.php'>
        <input type='text' name='0'>
        <input type='text' name='1'>
        <input type='text' name='2'>
        <button type='submit'>Enviar</button>
    </form>
    ";
