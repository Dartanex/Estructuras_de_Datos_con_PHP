<?php

    //Escribe un programa que tome un array de numeros y devuelva una nueva lista 
    //que contenga los mismos elementos en orden inverso

    function arrayReverse(array $numArray) {
        $reversedArray = array_reverse($numArray);

        echo '<pre>';
        echo 'Arreglo normal: ';
        foreach($numArray as $number){
            echo $number . ' ';
        }
        echo '<br> <br>' . 'Arreglo invertido: ';
        foreach($reversedArray as $revNumber){
            echo $revNumber . ' ';
        }
        echo '</pre>';
    }

    $numArray = [1,2,3,4,5,6,7,8];
    arrayReverse($numArray);

?>