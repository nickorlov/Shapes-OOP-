<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shapes</title>
</head>
<body>


<?php
include 'classes.php';

$rectangle = new Rectangle(17, 11);
$rectangle->setWidth(12);
$rectangle->setHeight(20);

echo "<h3>Rectangle</h3>";
echo 'Width: '.$rectangle->getWidth()."<br>";
echo 'Height: '.$rectangle->getHeight()."<hr>";
echo 'Perimeter: '.$rectangle->perimeter()."<br>";
echo 'Area: '.$rectangle->area()."<br><br>";

$square = new Square(25);

echo "<h3>Square</h3>";
echo 'Length: '.$square->getLength()."<hr>";
echo 'Perimeter: '.$square->perimeter()."<br>";
echo 'Area: '.$square->area()."<br>";

$circle = new Circle(10);

echo "<h3>Circle</h3>";
echo 'Radius: '.$circle->getRadius()."<hr>";
echo 'Perimeter: '.$circle->perimeter()."<br>";
echo 'Area: '.$circle->area()."<br>";

?>




</body>
</html>