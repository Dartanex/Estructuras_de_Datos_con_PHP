<?php

    //Escribir un programa que utilice bucles anidados
    //para imprimir un patron de asteriscos en forma ce piramide

    function pyramidPrinter($number){
        for ($i=0; $i <= $number; $i++) { 
            for ($j = 0; $j <= $number - $i;) { 
                echo '&nbsp;&nbsp;&nbsp';
                $j++;
            }

            for ($k=0; $k < $i; $k++) { 
                echo '* &nbsp;&nbsp;&nbsp';
            }
            echo '<br>';
        }
    }
    $number = 10;
    pyramidPrinter($number);

?>