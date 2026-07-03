<?php

require_once 'shape_factory.php';

$circle = ShapeFactory::createShape('circle');
$square = ShapeFactory::createShape('square');

$circle->draw();
$square->draw();
