<?php

namespace liw\app;

class Circle implements IShape
{
    /** @var float */
    private $radius;

    /**
     * Circle constructor.
     * @param float $radius
     */
    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @param float $radius
     */
    public function setRadius(float $radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return float
     */
    public function perimeter(): float
    {
        $perimeter = 2 * M_PI * $this->radius;

        return $perimeter;
    }

    /**
     * @return float
     */
    public function area(): float
    {
        $area = M_PI * pow($this->radius, 2);

        return $area;
    }
}