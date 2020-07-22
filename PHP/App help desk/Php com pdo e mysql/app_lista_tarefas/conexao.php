<?php
    class Conexao{
        
        private $host = 'localhost';
        private $dbname = 'php_com_pdo';
        private $user = 'root';
        private $pass = 'abacaxi';

        public function conectar(){
             try{

                $conexao = new PDO(
                    "mysql:host = $this->host; dbname=$this->dbname",
                    "$this->user",
                    "$this->pass"
                );
                    return $conexao;



             }
             catch(PDOException $e) { // tratando erro
                 echo '<p>'.$e->getMessege(). '</p>';
             }
        }
    }

?>