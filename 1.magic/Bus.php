<?php
class Bus
{
    protected $item;
    private $brand, $model, $year;

    public function __construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;

        $this->build();
    }

    public function __destruct() {
        //echo 'Сработал деструктор<br />';
    }

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }

        //return $this->$property;
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

    public function __sleep()
    {
        return ['brand', 'model'];
    }

    /**
     *
     */
    public function __wakeup()
    {
        $this->build();
    }

    public function __toString()
    {
        return $this->item;
    }

    public function build()
    {
        $this->item = 'Авто ' . $this->brand . ' модели ' . $this->model;
    }
}
