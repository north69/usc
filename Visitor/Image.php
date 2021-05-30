<?php

namespace USC\Visitor;

use USC\Shape\Circle;
use USC\Shape\Square;

class Image implements Visitor
{

    public function visitCircle(Circle $circle)
    {
        print("Creating an image of circle with radius = {$circle->getRadius()}, color = {$circle->getColor()} and border_size = {$circle->getBorderSize()}.\n");
    }

    public function visitSquare(Square $square)
    {
        print("Creating an image of square with width = {$square->getWidth()}, color = {$square->getColor()} and border size = {$square->getBorderSize()}.\n");
    }
}