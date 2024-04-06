<?php

namespace App;

class Quadrado extends Retangulo {

  private $largura;
  private $altura;

  public function getLargura(): float {
    return $this->largura;
  }

  public function getAltura(): float {
    return $this->altura;
  }

}