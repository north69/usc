<?php

namespace USC\Visitor;

use USC\Shape\Circle;
use USC\Shape\Square;

interface Visitor
{
    public function visitCircle(Circle $circle);
    public function visitSquare(Square $square);
}