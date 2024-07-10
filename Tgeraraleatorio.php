<?php
require_once "gerarAleatorio.php";

class TesteGerarAleatorio {

    public function testegerarAleatorio() {
        $teste = new GeradorNumeroAleatorio();
        $numero = $teste->gerar(1, 100);
        echo $numero;
    }
}

    $teste = new TesteGerarAleatorio();
    $teste->testegerarAleatorio();
?>