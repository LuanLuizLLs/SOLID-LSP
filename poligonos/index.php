<?php

require __DIR__.'/vendor/autoload.php';

use Poligonos\Quadrado;
use Poligonos\Retangulo;

echo '<h2>Sem o Princípio da Subistituição de Liskov</h2>';

echo '<h3>Cálculo do Retângulo</h3>';

$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
$area = $retangulo->getArea();

echo "<p><strong>Área do retângulo 10x5:</strong> $area</p>";

$quadrado = new Quadrado();
$quadrado->setAltura(5);
$retangulo->setLargura(5);
$area = $quadrado->getArea();

echo "<p><strong>Área do quadrado 5x5:</strong> $area</p>";

$retangulo = new Quadrado();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
$area = $retangulo->getArea();

echo "<p><strong>Área do retângulo 10x5:</strong> $area</p>";

