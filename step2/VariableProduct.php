<?php
class VariableProduct extends Product {
  public function __construct(string $code, string $name, int $price) {
    parent::__construct($code, $name, $price);
  }

  public function getPrice() : int {
    return $this->calculatePrice();
  }

  private function calculatePrice() : int {
    return parent::getPrice() + 2000;
  }
}