<?php namespace zenn\Manage;

// use zenn\Data\Product;
// use zenn\Data\Wrapping;
use zenn\Data\CartSpecification;
use Exception;

/**
 * ショッピングカートクラス
 * カートの状態を管理する
 */
class ShoppingCart {
  private array $products = [];

  /**
   * 商品をカートに追加する
   */
  // public function add(Product|Wrapping $product) {
  //   if (!method_exists($product, 'getPrice')) {
  //     throw new Exception('この商品は取り扱いできません');
  //   }

  //   $this->products[] = $product;
  // }
  public function add(CartSpecification $product) {
    $this->products[] = $product;
  }

  public function getTotal() : int {
    $total = 0;
    foreach ($this->products as $product) {
      $total += $product->getPrice();
    }
    return $total;
  }

  public function listAll() : void {
    echo "--------------------------------------------------------------------\n";
    foreach ($this->products as $product) {
      echo "{$product->getNumber()} {$product->getName()} {$product->getPrice()}\n";
    }
    echo "--------------------------------------------------------------------\n";
  }
}