<?php
namespace patterns\decorator;

class HouseBlend extends Beverage
{
    public function getDescription(): string
    {
        return 'HouseBlend';
    }

    public function cost(): float
    {
        return 0.90;
    }
}