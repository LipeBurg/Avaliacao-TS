<?php
require_once "converteMaiuscula.php";

class TesteConverteMaiuscula {

    public function testeConvMaiuscula() {
        $teste = new ConversorString();
        $resultado = $teste->paraMaiusculas("teste");
        echo $resultado;
    }
}

$teste = new TesteConverteMaiuscula();
$teste->testeConvMaiuscula();
?>