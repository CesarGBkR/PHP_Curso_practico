<?php

    function checker(int ...$years)
    {
        foreach ($years as $old) {
            if ($old < 5) {
                echo "El estudiante con $old años tendrá sus juguetes en la parte inferior de la bodega. \n";
            }
            elseif ($old > 7) {
                echo "El estudiante con $old años tendrá sus juguetes en la parte alta de la bodega. \n";
            }
            else {
                echo "El estudiante con $old años tendrá sus juguetes en la parte media de la bodega. \n";
            }
        }
    }

checker(4);
checker(6);
checker(8);