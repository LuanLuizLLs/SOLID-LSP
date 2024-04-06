<?php 

namespace App;

class Poligono {

  private $forma;

  public function getForma(): object {
    return $this->forma;
  }

  public function setForma(object $forma): void {
    $this->forma = $forma;
  }

  public function getArea(): float {
    return $this->getForma()->getAltura() * $this->getForma()->getLargura();
  }

}