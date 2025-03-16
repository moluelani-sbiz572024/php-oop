<?php
class ShoppingCart {
  private array $products = [];

  public function add(CartSpec $product) : void {
    $this->products[] = $product;
  }

  public function getTotal() : int {
    $total = 0;
    foreach ($this->products as $product) {
      $total += $product->getPrice();
    }
    return $total;
  }

  public function showProductList() : void {
    $count = 0;
    echo "---------------------------------------------\n";
    foreach ($this->products as $product) {
      $count++;
      echo "  {$count}: {$product->getCode()} {$product->getName()} {$product->getPrice()}\n";
    }
    echo "---------------------------------------------\n";
  }
}