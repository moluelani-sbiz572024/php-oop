<?php
abstract class AbstractProduct {
  protected string $code;
  protected string $name;
  protected int $price;

  protected function __construct(string $code, string $name, int $price) {
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

  abstract function getPrice() : int;
}