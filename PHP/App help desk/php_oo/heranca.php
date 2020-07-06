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
    }

    $carro = new Carro('abc1234', 'Branco') ;
    $moto = new Moto('aaa2222', 'Vermelha');
    echo '<pre>';
    print_r($carro);
    echo '<br>';
    print_r($moto);

    echo '</pre>';
    echo '<hr>';

    $carro->abrirTetoSolar();
    echo '<br>';
    $carro->alterarPosicaoVolante();
    echo '<br>';
    $carro->acelerar();
    echo '<br>';
    $moto->acelerar();
    echo '<br>';
    $carro->frear();
    echo '<br>';
    $moto->frear();
?>
    