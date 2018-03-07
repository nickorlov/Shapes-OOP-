<?php

namespace liw\app;

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