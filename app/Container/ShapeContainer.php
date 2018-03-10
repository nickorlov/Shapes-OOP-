<?php

namespace Container;

use Shape\IShape;

class ShapeContainer implements IShape
{
    /** @var IShape */
    public $shapes;

    /**
     * @return float
     */
    public function perimeter(): float;

    /**
     * @return float
     */
    public function area(): float;
}