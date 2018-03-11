<?php

namespace Shape;

use Container\ShapeContainer;

class Rectangle implements IShape
{
    /** @var float */
    private $width;

    /** @var float */
    private $height;

    /**
     * Rectangle constructor.
     * @param float $width
     * @param float $height
     */
    public function __construct(float $width, float $height)
    {
        ShapeContainer::addShape($this);
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @param float $width
     */
    public function setWidth(float $width): void
    {
        $this->width = $width;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @param float $height
     */
    public function setHeight(float $height): void
    {
        $this->height = $height;
    }

    /**
     * @return float
     */
    public function perimeter(): float
    {
        $perimeter = ($this->width + $this->height) * 2;

        return $perimeter;
    }

    /**
     * @return float
     */
    public function area(): float
    {
        $area = $this->width * $this->height;

        return $area;
    }
}