<?php

function calculatePrice(float $price, int $quantity): float
{
  if ($quantity > 10) {
    $price = $price * 0.5;
  }
  return $price * $quantity;
}

echo calculatePrice(30, 5);