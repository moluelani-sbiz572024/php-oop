<?php
class Wrapping extends AbstractProduct {
  public function __construct(string $code, string $name, int $price) {
    parent::__construct($code, $name, $price);
  }

  public function getPrice() : int {
    return $this->calculateWrapOption();
  }

  private function calculateWrapOption() : int {
    return $this->price + 500;
  }
}