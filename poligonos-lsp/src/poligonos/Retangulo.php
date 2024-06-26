<?php

namespace YesLSP\poligonos;

class Retangulo {

  private $largura;
  private $altura;

  public function getLargura(): float {
    return $this->largura;
  }

  public function getAltura(): float {
    return $this->altura;
  }

  public function setLargura(float $largura): void {
    $this->largura = $largura;
  }

  public function setAltura(float $altura): void {
    $this->altura = $altura;
  }
  
}