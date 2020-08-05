<?php

class Funcionario {

    private $nome;
    private $matricula;
    private $cpf;  

    public function setNome($nomef)
    {
        $this->nome = $nomef;
    }

    public function getNome()
    {
        return $this->nome;
    }


    public function setMatricula($matriculaf)
    {
        $this->matricula = $matriculaf;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }


    public function setCpf($cpff)
    {
        $this->cpf = $cpff;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function mostraDados(){

        return $tudo = $this->nome.$this->matricula.$this->cpf;
    }

}

$colaborador = new Funcionario();
$colaborador->setNome("Mateus");
$colaborador->setMatricula("000988");
$colaborador->setCpf("09451229698");


echo $colaborador->mostraDados(); echo "<br/>";



?>