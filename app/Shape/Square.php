<?php

namespace Shape;

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
    public function setLength(float $length)
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