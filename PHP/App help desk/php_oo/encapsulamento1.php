<?php
    //classs pai
    class Pai{
        private $nome = 'Lucas';
        protected $sobrenome = 'Oliveira';
        public $humor = 'Feliz';

        public function __get($attr){
            return $this->$attr;
        }
        public function __set($attr, $value){
            $this->$attr = $value;
        }

        private function executarMania(){
            echo 'assobiar';
        }
        protected function responder(){
            echo 'oi';
        } 
        public function executarAcao(){
            //function public executando o método do objeto internamente 
            
            $this->executarMania();
            echo '<br>';
            $this->responder();
        } 
    }  
    $pai = new Pai();

    echo $pai->executarAcao();
    // echo '<br>';
     
    
?>
    