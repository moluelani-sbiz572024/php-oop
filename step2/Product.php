<?php
require_once dirname(__FILE__).'/AbstractProduct.php';

class Product extends AbstractProduct {
  public function __construct(string $code, string $name, int $price) {
    parent::__construct($code, $name, $price);
  }

  public function getPrice() : int {
    return $this->price;
  }
}