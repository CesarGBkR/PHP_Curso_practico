<?php

    $palabras = array("sol", "luna", "cielo", "estrella", "lluvia");

    $form = "<form action='analisis.php'>";
    
    for ($i=0; $i < count($palabras); $i++) { 
        $form .= "La palabra: ".str_shuffle($palabras[$i])." ".
        "<input type='text' name='$i'>".
        "<br>";
    }

    $button = "<button type='submit'>Enviar</button>";
    $form_cierre = "</form>";

    echo $form.$button.$form_cierre;