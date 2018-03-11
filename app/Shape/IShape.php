<?php

namespace Shape;

interface IShape
{
    /**
     * @return float
     */
    public function perimeter(): float;

    /**
     * @return float
     */
    public function area(): float;
}