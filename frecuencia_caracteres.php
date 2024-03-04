<?php

    //Implementar una funcion que tome una cadena de texto y devuelva un array
    //asociativo que muestre la frecuencia de cada caracter en la cadena

    function characterFrequency($string){
        $normalizedString = strtolower( preg_replace("/[^A-Za-z0-9]/", '', $string) );
        $associativeArray = str_split( $normalizedString);
        $getFrequency = array_count_values($associativeArray);

        return $getFrequency;
    }

    $string = "Muy buenas noches caballeros";
    $conversion = characterFrequency($string);
    print_r($conversion);

?>