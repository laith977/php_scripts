<?php

require_once 'shape.php';

class Square implements Shape
{
    public function draw()
    {
        echo "Drawing Square" . PHP_EOL;
    }
}
