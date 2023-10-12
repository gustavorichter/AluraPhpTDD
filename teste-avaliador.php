<?php

use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;

require "vendor/autoload.php";

$leilao = new Leilao('Fusca 0km');

$marcia = new Usuario('Marcia');
$joao = new Usuario("Joao")
