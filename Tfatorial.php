<?php
require_once "fatorial.php";

class TesteFatorial {

    public function testefatorial() {
        $teste = new CalculadoraFatorial();
        $resultado = $teste->calcular(5);
        echo $resultado;
    }
}

$teste = new TesteFatorial();
$teste->testefatorial();
?>