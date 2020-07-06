<?php
    //reaproveitação em outro modelo-> atributos e métodos
    class Carro extends Veiculo{ // relacao pai e filho
        public $teto_solar = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }
        
        function abrirTetoSolar(){
            echo 'abrir teto solar';
        }
        function alterarPosicaoVolante(){
            echo 'alterar posicao do volante';
        }
    }
    class Moto extends Veiculo{
        public $contra_peso_guidao = true;
        
        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar(){
            echo 'empinar';
        }
    
    function trocarMarcha(){
        echo'desengatar embreagem c mao e com a pe';
    }
}

    class Veiculo{
        public $placa = null;
        public $cor = null;
         
        function acelerar(){
            echo'Acelera sim sinhô';
        }
        function frear(){
            echo 'freia sim sinhô';
        }
        function trocarMarcha(){
            echo'desengatar embreagem c pé e com a mao';
        }
    }

    class Caminhao extends Veiculo{

    }

    $carro = new Carro('abc1234', 'Branco');
    $moto = new Moto('aaa2222', 'Vermelha');
    $caminhao = new Caminhao();

    $carro->trocarMarcha();
    echo '<br>';
    $moto->trocarMarcha();
    echo '<br>';

    $caminhao->trocarMarcha();
?>
    