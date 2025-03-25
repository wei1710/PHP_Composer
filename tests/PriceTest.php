<?php

use PHPUnit\Framework\TestCase;

require_once 'src/price.php';

class PriceTest extends TestCase
{
  public function test_30_and_5_return_150(): void
  {
    $price = 30;
    $quantity = 5;
    $expected = 150;

    $result = calculatePrice($price, $quantity);

    $this->assertEquals($expected, $result);
  }
}