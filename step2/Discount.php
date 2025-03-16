<?php
class Discount extends AbstractProduct {
  public function __construct(string $code, string $name, int $price) {
    parent::__construct($code, $name, $price);
  }

  public function getPrice() : int {
    return $this->calculateDiscountPrice();
  }

  private function calculateDiscountPrice() : int {
    return $this->price - 2500;
  }
}