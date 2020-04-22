<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//abstract class Beverage
//{
//    protected $description = '';
//
//    public function getDescription()
//    {
//        return $this->description;
//    }
//
//    abstract public function getCost();
//}
//
//abstract class CondimentDecorator extends Beverage
//{
//    abstract public function getDescription();
//}
//
//class Espresso extends Beverage
//{
//    protected $description = 'Espresso';
//    protected $cost = 1.00;
//
//    public function getCost()
//    {
//        return $this->cost;
//    }
//
//}
//
//class Mocha extends CondimentDecorator
//{
//    protected $beverage;
//
//    public function __construct(Beverage $beverage)
//    {
//        $this->beverage = $beverage;
//    }
//
//    public function getDescription()
//    {
//        return $this->beverage->getDescription();
//    }
//
//    public function getCost()
//    {
//        return $this->beverage->getCost() + 0.45;
//    }
//}
//
//echo 'Here';