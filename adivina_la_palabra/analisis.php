<?php
    print_r($_REQUEST);

    $palabras = array("sol", "luna", "cielo", "estrella", "lluvia");
    for ($i=0; $i < count($palabras) ; $i++) { 
        if ($_REQUEST[$i] == $palabras[$i]) {
            echo "La palabra ingresada es correcta \n";
        }
        else
            echo "La palabra ingresada es incorrecta, la palabra correcta es $palabras[$i] \n";
    }