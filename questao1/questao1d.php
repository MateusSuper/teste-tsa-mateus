<?php

include 'include1.php';

function ordenaNomes (){

    global $funcionarios;

        for($i = 0; $i<count($funcionarios);++$i){

            $nomes [$i] = $funcionarios [$i]['nome'];
        }

    asort($nomes);
    var_dump($nomes);

}

ordenaNomes();

?>