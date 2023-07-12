<?php

abstract class Shape
{
    protected $color;

    public function __construct($color) 
    {
        $this->color = $color;
    }

    abstract public function getArea();
}

class Circle extends Shape
{
    private $radius;

    public function __construct($color, $radius)
    {
        parent::__construct($color);
        $this->radius = $radius;
    }

    public function getArea()
    {
        return pi() * pow($this->radius,2);
    }
}

class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($color, $width, $height)
    {
        parent::__construct($color);
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }
}

$circle = new Circle("Red", 5);
echo "Circle Area: " . $circle->getArea() . PHP_EOL;

$rectangle = new Rectangle("Blue", 4, 6);
echo "Rectangle Area: " . $rectangle->getArea() . PHP_EOL;