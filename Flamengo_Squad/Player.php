<?php
class Player{
    private $nome;
    private $jersey;
    private $position;
    private $year;
    private $players = [];

    public function __construct($nome, $jersey, $year, $position){
        $this->nome = $nome;
        $this->jersey = $jersey;
        $this->position = $position;
        $this->year = $year;
    }

    public function setJersey($jersey){
        $this->jersey = $jersey;
    }

    public function toString(){
        return $this->nome . '('. $this->jersey .') - ' . $this->position . ' | ' . $this->year;
    }
}
