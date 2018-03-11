<?php

require __DIR__ . '/../vendor/autoload.php';

use Shape\Rectangle, Shape\Square, Shape\Circle, Container\ShapeContainer;

$rectangle = new Rectangle(17, 11);
$rectangle->setWidth(12);
$rectangle->setHeight(20);

echo "<h3>Rectangle</h3>";
echo 'Width: ' . $rectangle->getWidth() . "<br>";
echo 'Height: ' . $rectangle->getHeight() . "<hr>";
echo 'Perimeter: ' . $rectangle->perimeter() . "<br>";
echo 'Area: ' . $rectangle->area() . "<br><br>";

$square = new Square(25);

echo "<h3>Square</h3>";
echo 'Length: ' . $square->getLength() . "<hr>";
echo 'Perimeter: ' . $square->perimeter() . "<br>";
echo 'Area: ' . $square->area() . "<br>";

$circle = new Circle(10);

echo "<h3>Circle</h3>";
echo 'Radius: ' . $circle->getRadius() . "<hr>";
echo 'Perimeter: ' . $circle->perimeter() . "<br>";
echo 'Area: ' . $circle->area() . "<br>";

$shapeContainer = new ShapeContainer();

echo "<h3>Total</h3>";
echo 'Objects: ' . count((array)\Container\ShapeContainer::$shapes) . "<hr>";
echo 'Perimeter: ' . $shapeContainer->perimeter() . "<br>";
echo 'Area: ' . $shapeContainer->area() . "<br>";
