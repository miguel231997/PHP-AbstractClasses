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

?>

In this example, we have an abstract class Shape that defines a common behavior getArea() for different shapes. The Shape class has an abstract method getArea() which must be implemented by its derived classes.

The Circle class and Rectangle class both extend the Shape class and provide their own implementations for the getArea() method. They also have their own properties (radius and width, height) and constructors.

In the main part of the code, we create instances of Circle and Rectangle, passing the required parameters to their constructors. We then call the getArea() method on each object to calculate and display the respective areas of the shapes.

By using abstract classes and methods, we can define a common interface (getArea()) that must be implemented by any class that wants to be considered a shape. This promotes code reusability and ensures that each shape has its own implementation for calculating its area.