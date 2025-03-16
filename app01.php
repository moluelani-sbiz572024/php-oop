<?php
// ---------------------------------------------------------------
require_once dirname(__FILE__).'/step1/Product.php';
require_once dirname(__FILE__).'/step1/VariableProduct.php';
require_once dirname(__FILE__).'/step1/Wrapping.php';
require_once dirname(__FILE__).'/step1/Discount.php';
require_once dirname(__FILE__).'/step1/ShoppingCart.php';
// ---------------------------------------------------------------

$cart = new ShoppingCart();

$shampoo = new Product('A0010', 'シャンプー', 2000);
$special = new VariableProduct('S0020', '期間限定・デスクチェア', 156000);
$wrap = new Wrapping('A1000', '高級ハム詰め合わせ（包装費含む）', 8700);
$discount = new Discount('A1100', '組み立て式デスク', 12500);

$cart->add($shampoo);
$cart->add($special);
$cart->add($wrap);
$cart->add($discount);

$cart->showProductList();
echo "カート内の合計金額は {$cart->getTotal()} 円です。\n";