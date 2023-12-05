<?php
class Product
{
    protected float $cost;
    protected int $quantity;

    function __construct($cost, $quantity)
    {
        $this->cost = $cost;
        $this->quantity = $quantity;
    }
}
?>