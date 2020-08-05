<?php

//O padrão de projeto utilizado é o Singleton, onde permite que apenas uma instancia da classe seja criada durante a execução do código.

class Funcionario {

    private static $singletonfunc;

    public static function getInstance(){

        if(self::$singletonfunc = null){
           self::$singletonfunc = new Funcionario; 
           echo "Classe instanciada";                                                   
        } else {

            echo "a classe não pode ser instanciada novamente";
        }

        return self::$singletonfunc;    
    }



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



echo $colaborador->mostraDados()."<br/>";

echo $colaborador->getMatricula()."<br/>" ;

//teste singleton
$funcionario = new Funcionario;
echo $funcionario->getNome();
echo $funcionario->getInstance();
//teste singleton 

?>