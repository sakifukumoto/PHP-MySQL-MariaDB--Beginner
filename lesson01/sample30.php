<?php
//税込金額を返す
function inTax($value) {
  return ceil($value * 1.1);
}

$price = 150;
$price_tax = inTax($price);
echo $price_tax;
?>