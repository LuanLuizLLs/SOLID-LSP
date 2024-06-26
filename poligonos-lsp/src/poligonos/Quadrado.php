<?php

namespace YesLSP\poligonos;

class Quadrado {

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
    $this->altura = $largura;
  }

  public function setAltura(float $altura): void {
    $this->largura = $altura;
    $this->altura = $altura;
  }

}