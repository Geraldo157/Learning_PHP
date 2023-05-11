<?php
require_once 'Player.php';

$players = [];

if(isset($_POST['nome']) && isset($_POST['year']) && isset($_POST['jersey']) && isset($_POST['position'])){
    $nome = $_POST['nome'];
    $jersey = $_POST['jersey'];
    $position = $_POST['position'];
    $year = $_POST['year'];
    $player = new Player($nome, $jersey, $year, $position);
    $players[] = $player;
}
