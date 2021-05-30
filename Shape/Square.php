<?php
namespace USC\Shape;

use USC\Visitor\Visitor;

class Square extends Shape {

	private $width;

	private $border_size;
	private $color;

	public function __construct(float $width)
    {
		$this->width = $width;
	}

	public function printArrayOfPoints() {
		print("Printing an array of points of square with width = {$this->width}, color = {$this->color} and border size = {$this->border_size}.\n");
	}

	public function createImage() {
		print("Creating an image of square with width = {$this->width}, color = {$this->color} and border size = {$this->border_size}.\n");
	}

    public function getWidth(): float
    {
        return $this->width;
    }

    public function accept(Visitor $visitor)
    {
        $visitor->visitSquare($this);
    }
}