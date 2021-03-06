<?php

require __DIR__.'/../vendor/autoload.php';

use Shape\Rectangle;
use Shape\Square;
use Shape\Circle;
use Container\ShapeContainer;

$container = new ShapeContainer();

$rectangle = new Rectangle(17, 11);
$container->addShape($rectangle);

echo "<h3>Rectangle</h3>";
echo 'Width: '.$rectangle->getWidth()."<br>";
echo 'Height: '.$rectangle->getHeight()."<hr>";
echo 'Perimeter: '.$rectangle->perimeter()."<br>";
echo 'Area: '.$rectangle->area()."<br><br>";

$square = new Square(25);
$container->addShape($square);

echo "<h3>Square</h3>";
echo 'Length: '.$square->getLength()."<hr>";
echo 'Perimeter: '.$square->perimeter()."<br>";
echo 'Area: '.$square->area()."<br><br>";

$circle = new Circle(10);
$container->addShape($circle);

echo "<h3>Circle</h3>";
echo 'Radius: '.$circle->getRadius()."<hr>";
echo 'Perimeter: '.$circle->perimeter()."<br>";
echo 'Area: '.$circle->area()."<br><br>";

echo "<h3>Total</h3>";
echo 'Objects: '.count((array)$container->getShapes())."<hr>";
echo 'Perimeter: '.$container->perimeter()."<br>";
echo 'Area: '.$container->area()."<br>";
