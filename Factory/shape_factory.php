<?php

require_once 'circle.php';
require_once 'square.php';
require_once 'shape.php';
class ShapeFactory
{
    public static function createShape(string $type): Shape
    {
        switch ($type) {
            case 'circle':
                return new Circle();
            case 'square':
                return new Square();
            default:
                throw new InvalidArgumentException("Invalid shape type");
        }
    }
}
