<?php

require __DIR__.'/vendor/autoload.php';

use App\Poligono;
use App\poligonos\Quadrado;
use App\poligonos\Retangulo;

echo '<h2>Princípio da Subistituição de Liskov</h2>';

echo '<h3>Cálculo do Retângulo</h3>';

$poligono = new Poligono();
$poligono->setForma(new Retangulo());
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);

echo "<pre>";
print_r($poligono->getForma());
echo "</pre>";

$area = $poligono->getArea();

echo "<p><b>Área do retângulo:</b> $area</p>";

$poligono = new Poligono();
$poligono->setForma(new Quadrado());
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);

echo "<pre>";
print_r($poligono->getForma());
echo "</pre>";

$area = $poligono->getArea();

echo "<p><b>Área do quadrado:</b> $area</p>";

