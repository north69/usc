<?php
namespace USC\Visitor;

use USC\Shape\Circle;
use USC\Shape\Square;

class ArrayOfPoints implements Visitor {


    public function visitCircle(Circle $circle)
    {
        print("Printing an array of points of circle with radius = {$circle->getRadius()}, color = {$circle->getColor()} and border_size = {$circle->getBorderSize()}.\n");
    }

    public function visitSquare(Square $square)
    {
        print("Printing an array of points of square with width = {$square->getWidth()}, color = {$square->getColor()} and border size = {$square->getBorderSize()}.\n");
    }
}