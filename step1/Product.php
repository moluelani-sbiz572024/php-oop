<?php
class Product {
  private string $code;
  private string $name;
  private int $price;

  public function __construct(string $code, string $name, int $price) {
    $this->code = $code;
    $this->name = $name;
    $this->price = $price;
  }

  public function getCode() : string {
    return $this->code;
  }

  public function getName() : string {
    return $this->name;
  }

  public function getPrice() : int {
    return $this->price;
  }
}