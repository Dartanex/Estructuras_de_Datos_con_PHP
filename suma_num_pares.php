<?php

    //Crea un script que sume todos los numeros pares en un array de numeros enteros
    function isEven($number){
        if($number % 2 == 0){
            return $number;
        }
    }

    $numArray = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
    $arrayEven = array_filter($numArray, "isEven");
    echo 'Arreglo de números ingresado: ';
    foreach($numArray as $number){
        echo $number . ' ';
    }
    echo '<br>';
    echo 'Arreglo de números pares: ';
    foreach($arrayEven as $numPar){
        echo $numPar . ' ';
    }
    echo '<br>';
    echo 'Suma de números pares: ';
    print_r( array_sum( $arrayEven ) );

?>