<?php
namespace USC\Shape;

use USC\Visitor\Visitor;

class Square extends Shape {

	private $width;

	public function __construct(float $width)
    {
		$this->width = $width;
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