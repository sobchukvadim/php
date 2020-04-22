<?php

class Square
{
    private $side;

    public function __construct($side)
    {
        $this->side = $side;
    }

    public function __get($name)
    {
        if ($name == 'area') {
            return $this->getArea();
        } elseif ($name == 'side') {
            return $this->side;
        }
    }

    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
    }

    public function __toString(): String
    {
        return $this->getArea();
    }

    public function someFunc(float $side, int $other = null) : float
    {
        return $other ?? '45';
    }

    private function getArea()
    {
        return pow($this->side, 2);
    }
}