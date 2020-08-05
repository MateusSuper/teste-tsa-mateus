

<?php
$pessoa = new StdClass;
$pessoa->nome = "Meu nome";
$pessoa->organizacao = "Nova Organização";
$pessoa->telefone = "Telefones";
$pessoa->emails="Emails";
$conhecimentos = [
    "Js",
    "Php",
    "C#",
    "NodeJs",
    "None",
    "None",
    "None",
    "None"
];

function armazenarConhecimentos(){
   global $pessoa;
   global $conhecimentos; 
    
   $c = [];
    
    foreach($conhecimentos as $k => $conhecimento) {
        $c[$k] = $conhecimentos[$k];
    }

    foreach($c as $j => $d) {
        $pessoa->conhecimentos[$j] = $d;
    }
}

armazenarConhecimentos();

print_r($pessoa);


?>