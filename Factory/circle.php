<?php

require_once 'shape.php';

class Circle implements Shape
{
    public function draw()
    {
        echo "Drawing Circle" . PHP_EOL;
    }
}
