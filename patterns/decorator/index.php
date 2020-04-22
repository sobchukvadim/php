<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    interface Beverage
    {
        public function getCost();

        public function getDescription();
    }

    abstract class CondimentDecorator implements Beverage
    {
        protected $beverage;

        public function __construct(Beverage $beverage)
        {
            $this->beverage = $beverage;
        }
    }

    class Espresso implements Beverage
    {
        protected $sizesPrices = [
            'small'  => 1,
            'medium' => 2,
            'large'  => 3
        ];
        protected $size;
        protected $description = 'Espresso';

        public function __construct($size)
        {
            $this->size = $size;
        }

        public function getSize()
        {
            return $this->size;
        }

        public function getCost()
        {
            return $this->sizesPrices[$this->size];
        }

        public function getDescription()
        {
            return $this->description;
        }
    }

    class Mocha extends CondimentDecorator
    {
        protected $sizesPrices = [
            'small'  => 0.2,
            'medium' => 0.4,
            'large'  => 0.6
        ];
        protected $description = ' Mocha';

        public function getCost()
        {
            return $this->beverage->getCost() + $this->sizesPrices[$this->beverage->getSize()];
        }

        public function getDescription()
        {
            return $this->beverage->getDescription() . $this->description;
        }
    }

    class Whip extends CondimentDecorator
    {
        protected $cost = 0.75;
        protected $description = ' Whip';

        public function getCost()
        {
            return $this->beverage->getCost() + $this->cost;
        }

        public function getDescription()
        {
            return $this->beverage->getDescription() . $this->description;
        }
    }

    class Soy extends CondimentDecorator
    {
        protected $cost = 0.33;
        protected $description = ' Soy';

        public function getCost()
        {
            return $this->beverage->getCost() + $this->cost;
        }

        public function getDescription()
        {
            return $this->beverage->getDescription() . $this->description;
        }
    }

    $beverage = new Espresso('large');
    $beverage = new Mocha($beverage);
    echo $beverage->getDescription() . ' - $' . $beverage->getCost();