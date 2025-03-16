<?php
require_once dirname(__FILE__).'/zenn/config.php';

use zenn\Data\Product;
use zenn\Data\VariableProduct;
use zenn\Data\Wrapping;
use zenn\Data\DiscountProduct;
use zenn\Manage\ShoppingCart;

//
$shampoo = new Product('0010', 'シャンプー', 563);
$cooler = new VariableProduct('1020', 'クーラー', 235000);
$present = new Wrapping('9001', 'プレゼント（包装オプション付き）', 4500);
$discount = new DiscountProduct('9999', 'ディスカウント商品', 23000);
$cart = new ShoppingCart();

//
$cart->add($shampoo);
$cart->add($cooler);
$cart->add($present);
$cart->add($discount);

//
echo "カートの合計金額は {$cart->getTotal()} 円です。\n";
echo $cart->listAll();
