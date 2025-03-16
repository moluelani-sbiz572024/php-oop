<?php namespace zenn\Data;

class DiscountProduct implements CartSpecification {
  private string $number;
  private string $name;
  private int $price;
  
  public function __construct(string $number, string $name, int $price) {
    $this->number = $number;
    $this->name = $name;
    $this->price = $price;
  }

  public function getNumber():string {
    return $this->number;
  }

  public function getName():string {
    return $this->name;
  }

  public function getPrice():int {
    $price = $this->calculateDiscount();
    return $price;
  }

  public function calculateDiscount() {
    return ($this->price - 2340);
  }
}