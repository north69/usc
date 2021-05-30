<?php
namespace USC\Shape;

use USC\Visitor\Visitor;

class Circle extends Shape
{
	/** @var float */
	private $radius;

	public function __construct(float $radius)
    {
		$this->radius = $radius;
	}

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function accept(Visitor $visitor)
    {
        $visitor->visitCircle($this);
    }
}