<?php


class Cylinder
{
    public function getVolume($radius, $height)
    {
        $baseArea = $this->getPerimeter($radius);
        $perimeter = $this->getBaseArea($radius);
        return $this->getBaseVolume($height, $perimeter, $baseArea);
    }
    public function getPerimeter($radius)
    {
        $baseArea = pi() * $radius * $radius;
        return $baseArea;
    }

    public function getBaseArea($radius)
    {
        $perimeter = 2 * pi() * $radius;
        return $perimeter;
    }
    public function getBaseVolume($height, $perimeter, $baseArea)
    {
        $volume = $perimeter * $height + 2 * $baseArea;
        return $volume;
    }
}