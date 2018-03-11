<?php

namespace Container;

use Shape\IShape;

class ShapeContainer implements IShape
{
    /** @var IShape */
    public static $shapes;

    /**
     * @return float
     */
    public function perimeter(): float
    {
        $count = 0;

        foreach (self::$shapes as $shape) {
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

        foreach (self::$shapes as $shape) {
            $count += $shape->area();
        }

        return $count;
    }

    /**
     * @param IShape $shape
     */
    public static function addShape(IShape $shape)
    {
        self::$shapes[] = $shape;
    }
}
