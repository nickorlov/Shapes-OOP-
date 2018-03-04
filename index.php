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

    interface iShape
    {
        public function perimeter();
        public function area();
    }

    class Rectangle implements iShape
    {
        private $width;
        private $height;

        public function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }

        public function getWidth() {
            return $this->width;
        }

        public function setWidth($width) {
            $this->width = $width;
        }

        public function getHeight() {
            return $this->height;
        }

        public function setHeight($height) {
            $this->height = $height;
        }

        public function perimeter() {
            $perimeter = ($this->width + $this->height) * 2;
            return $perimeter;
        }

        public function area() {
            $area = $this->width * $this->height;
            return $area;
        }
    }

    class Circle implements iShape
    {
        private $radius;

        public function __construct($radius) {
            $this->radius = $radius;
        }

        public function getRadius() {
            return $this->radius;
        }

        public function setRadius($radius) {
            $this->radius = $radius;
        }

        public function perimeter() {
            $perimeter = 2 * M_PI * $this->radius;
            return $perimeter;
        }

        public function area() {
            $area = M_PI * pow($this->radius, 2);
            return $area;
        }
    }

    class Square implements iShape
    {
        private $length;

        public function __construct($length) {
            $this->length = $length;
        }

        public function getLength() {
            return $this->length;
        }

        public function setLength($length) {
            $this->length = $length;
        }

        public function perimeter() {
            $perimeter = 4 * $this->length;
            return $perimeter;
        }

        public function area() {
            $area = pow($this->length, 2);
            return $area;
        }
    }

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