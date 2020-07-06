<?php

    try {
        echo '<h3> ** Try ** </h3>';

        //$sql = 'Select * from clientes';// seleção de registros dentro de um banco de dados
        //mysql_query($sql);  // vai retornar um erro
        if(!file_exists('require_arquivo_a.php')){ // true if file exist
            // return false if file not exist
            throw new Exception('O arquivo em questão deveria estar disponível as '. date('d/m/Y:i:s') .  'horas mas não estava. Vamos seguir mesmo assim');
            // a depender do erro, pode ser uma exception ou error
            // depende do tratament a ser feito
        }
    }
    catch(Error $e) { // capturando erro no try
        echo '<h3> ** Catch Error ** </h3>';
        echo '<p style= "color: red">' . $e . '</p>';
        // armazenando/exibindo esse erro num banco de dados
    }
    catch(Exception $e) {
        echo '<h3> ** Catch Exception** </h3>';
        echo '<p style= "color: red">' . $e . '</p>';
        // capturando/exibindo essa excessão num banco de dados   
    }
    finally {
        // é opcional caso o catch esteja implementado
        echo '<h3> ** Finally ** </h3>';
    }



?>