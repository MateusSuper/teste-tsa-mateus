<?php
include 'include1.php';

/*Não consegui unir os nomes dos funcionarios de organizações iguais na mesma chave*/  


function organizanome(){

  $organiza = array();    
  global $funcionarios;

  foreach ($funcionarios as $key => $valor){

    foreach($funcionarios as $key2 => $valor2){
            
      $organiza["cadastro".$key]["nome"] = $funcionarios[$key]["nome"];
      $organiza["cadastro".$key]["orgnizacao"] = $funcionarios[$key]["organizacao"];  
    }

  }
        
  print_r($organiza);   
}  



organizanome();

?>
