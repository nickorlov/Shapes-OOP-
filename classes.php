<?php
interface IShape
{
    public function perimeter();
    public function area();
}

class Rectangle implements IShape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function perimeter()
    {
        $perimeter = ($this->width + $this->height) * 2;
        return $perimeter;
    }

    public function area()
    {
        $area = $this->width * $this->height;
        return $area;
    }
}

class Circle implements IShape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function perimeter()
    {
        $perimeter = 2 * M_PI * $this->radius;
        return $perimeter;
    }

    public function area()
    {
        $area = M_PI * pow($this->radius, 2);
        return $area;
    }
}

class Square implements IShape
{
    private $length;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setLength($length)
    {
        $this->length = $length;
    }

    public function perimeter()
    {
        $perimeter = 4 * $this->length;
        return $perimeter;
    }

    public function area()
    {
        $area = pow($this->length, 2);
        return $area;
    }
}
