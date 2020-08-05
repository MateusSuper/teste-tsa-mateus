<?php

include 'include1.php';

function media (){

    global $funcionarios;

    for($i = 0; $i<count($funcionarios);++$i){

        $salarios [$i] = $funcionarios [$i]['salario'];

    }

    echo "A média salarial é: ".$mediasalario = array_sum($salarios)/count($funcionarios).",00";

}

media();


?>