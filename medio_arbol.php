<?php
    function arbol(int $altura)
    {
        for ($i=0; $i < $altura; $i++) { 
            echo str_repeat("*", $i)."\n";
        }
    }

arbol(10);