<?php
require_once "primo.php";

class TestePrimo {

    public function testeprimo() {
        $teste = new VerificadorNumeroPrimo();
        $resultado = $teste->ehPrimo(3);
        echo $resultado;
    }
}

$teste = new TestePrimo();
$teste->testeprimo();
?>