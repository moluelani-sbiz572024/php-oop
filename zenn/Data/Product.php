<?php namespace zenn\Data;
require_once dirname(__FILE__).'/CartSpecification.php';

/**
 * 商品クラス
 */
class Product implements CartSpecification {
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

  /**
   * 価格を返す
   *
   * @return integer 価格
   */
  public function getPrice():int {
    return $this->price;
  }
}
