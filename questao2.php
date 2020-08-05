<?php
/*Não consegui reproduzir no formato recursivo*/

function calculaMMC($a, $b, $c){

    $MMC;
    $inc=0;
    $divisores = array();

    for($i = 2; $i<=100; $i++){

        if ($a%$i == 0 ){
            $divisores[$inc++] = $i;
            $a/=$i; 
        
        } 
        if ($b%$i == 0 ){
            $divisores[$inc++] = $i;
            $b/=$i; 
        
        } 
        if ($c%$i == 0 ){
            $divisores[$inc++] = $i;
            $c/=$i;
        
        }
        if ($a%$i == 0 ||$b%$i == 0  ||$c%$i == 0 ){

            $i=$i;
        }
    
    }

    $MMC = array_product($divisores);
    return $MMC;

}
    echo "O menor divisor comum é: ".calculaMMC(4,5,6)."<br/>";

?>