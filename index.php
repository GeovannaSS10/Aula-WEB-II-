<?php

require_once "Pessoa.php";
require_once "Cliente.php";
require_once "ClienteVip.php";

function p($variavel){
    echo "Resultado".$variavel."<br>";
}

$cl = new Cliente();
$c1v = new ClienteVip();

$c1->setNome= "Nome do cliente";
p($c1->getNome());

$clv->setNome= "Nome do cliente Vip";
p($c1v->getNome());