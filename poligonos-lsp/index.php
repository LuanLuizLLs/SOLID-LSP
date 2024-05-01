<?php

require __DIR__.'/vendor/autoload.php';

use YesLSP\Poligono;
use YesLSP\poligonos\Quadrado;
use YesLSP\poligonos\Retangulo;

echo "<h2>Com o Princípio da Subistituição de Liskov</h2>";

echo "<h3>Cálculo do Retângulo</h3>";

$poligono = new Poligono();
$poligono->setForma(new Retangulo());
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);

echo "<pre>";
print_r($poligono->getForma());
echo "</pre>";

$area = $poligono->getArea();

echo "<p><b>Área do retângulo:</b> $area</p>";

echo "<hr>";

$poligono = new Poligono();
$poligono->setForma(new Quadrado());
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);

echo "<pre>";
print_r($poligono->getForma());
echo "</pre>";

$area = $poligono->getArea();

echo "<p><b>Área do quadrado:</b> $area</p>";

