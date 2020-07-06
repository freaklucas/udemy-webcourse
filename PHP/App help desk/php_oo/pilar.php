<?php
    class Funcionario {
        
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;
        // getters and setters(overloading/sobrecarregar)
        function __set($atributo, $valor){
            $this->$atributo= $valor;
        }
        function __get($atributo){
            return $this->$atributo;
        }
    
        function resumirCadFunc(){
            return $this->__get('nome') . ' possui ' . $this->__get('numFilhos') . ' filho(s) ';
        }
        function modificarNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }
    }

    $y = new Funcionario();
    $y->__set('nome', 'jose');
    $y->__set('numFilhos', '3');
    echo $y->resumirCadFunc();
    //echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s)';
   
   
?>
