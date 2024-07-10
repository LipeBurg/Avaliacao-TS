<?php
require_once "raizquadrada.php";

class TesteRaizQuadrada {

    public function testeraizquadrada() {
        $teste = new CalculadoraRaizQuadrada();
        $resultado = $teste->calcular(25);
        echo $resultado;
    }
}

$teste = new TesteRaizQuadrada();
$teste->testeraizquadrada();
?>
