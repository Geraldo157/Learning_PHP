<?php
class calculations{
    private $anos;
    private $juros;
    private $valorInvestido;
    public function __construct($anos, $juros, $valorInvestido){
        $this->$anos = $anos;
        $this->$juros = $juros;
        $this->$valorInvestido = $valorInvestido;
    }

    public function calculate(){
        $calc = $this->valorInvestido * (1 - $this->juros) ** $this->anos;
        return $calc;
    }

    public function getAnos(){
        return $this->anos;
    }

    public function getJuros(){
        return $this->juros;
    }

    public function getValorInvestido(){
        return $this->valorInvestido;
    }
}
