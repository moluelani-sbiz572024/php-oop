<?php namespace zenn\Data;

class VariableProduct extends Product {
  
  public function __construct(string $number, string $name, int $price) {
    parent::__construct($number, $name, $price);
  }

  public function getPrice():int {
    $price = $this->calculatePrice();
    return $price;
  }

  private function calculatePrice():int {
    return (parent::getPrice() * 2);
  }
}