<?php

require __DIR__.'/vendor/autoload.php';

use NoLSP\Quadrado;
use NoLSP\Retangulo;

echo "<h2>Sem o Princípio da Subistituição de Liskov</h2>";

echo "<h3>Cálculo do Retângulo</h3>";

$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
$area = $retangulo->getArea();

echo "<p><b>Área do retângulo 10x5:</b> $area</p>";

$quadrado = new Quadrado();
$quadrado->setAltura(5);
$retangulo->setLargura(5);
$area = $quadrado->getArea();

echo "<p><b>Área do quadrado 5x5:</b> $area</p>";

$retangulo = new Quadrado();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
$area = $retangulo->getArea();

echo "<p><b>Área do retângulo 10x5:</b> $area</p>";

