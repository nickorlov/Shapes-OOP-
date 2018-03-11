<?php

namespace Shape;

use Container\ShapeContainer;

class Square implements IShape
{
    /** @var float */
    private $length;

    /**
     * Square constructor.
     * @param float $length
     */
    public function __construct(float $length)
    {
        ShapeContainer::addShape($this);
        $this->length = $length;
    }

    /**
     * @return float
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * @param float $length
     */
    public function setLength(float $length): void
    {
        $this->length = $length;
    }

    /**
     * @return float
     */
    public function perimeter(): float
    {
        $perimeter = 4 * $this->length;

        return $perimeter;
    }

    /**
     * @return float
     */
    public function area(): float
    {
        $area = pow($this->length, 2);

        return $area;
    }
}