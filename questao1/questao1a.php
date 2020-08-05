<?php
include "include1.php";

function menoridade (){

   global $funcionarios;

   for($i = 0; $i<count($funcionarios);++$i) {    

      $idades [$i] = $funcionarios [$i]['idade'];

   }


   for($i = 0; $i<count($funcionarios);++$i){

      if ($funcionarios [$i]['idade'] == min($idades))
      {
         echo " O funcionário de menor idade é: ".$funcionario = $funcionarios [$i]['nome'];
      }

   }

}

menoridade();

?>