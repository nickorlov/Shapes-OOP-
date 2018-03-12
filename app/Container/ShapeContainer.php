<?php

namespace Container;

use Shape\IShape;

class ShapeContainer implements IShape
{
    /** @var IShape[] */
    public $shapes;

    /**
     * @return float
     */
    public function perimeter(): float
    {
        $count = 0;

        foreach ($this->shapes as $shape) {
            $count += $shape->perimeter();
        }

        return $count;
    }

    /**
     * @return float
     */
    public function area(): float
    {
        $count = 0;

        foreach ($this->shapes as $shape) {
            $count += $shape->area();
        }

        return $count;
    }

    /**
     * @param IShape $shape
     */
    public function addShape(IShape $shape): void
    {
        $this->shapes[] = $shape;
    }

    /**
     * @return IShape[]
     */
    public function getShapes()
    {
        return $this->shapes;
    }
}
