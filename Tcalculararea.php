<?php
require_once "calcularArea.php";

class TestecalcularArea {

    public function testearea () {	
        $teste = new CalculadoraArea();
        $resultado = $teste->areaRetangulo(5, 10);
        echo $resultado;
    }
}

    $teste = new TestecalcularArea();
    $teste->testearea();
?>