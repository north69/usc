<?php
namespace USC\Painter;

use USC\Shape\Shape;
use USC\Shape\Square;

class SquarePainter extends Painter {

	private $width = 0;

	public function __construct(float $width) {
		$this->width = $width;
	}

	protected function createShape(): Shape {
		$square = new Square($this->width);
		$square
			->setColor($this->color)
			->setBorderSize($this->border_size);
		return $square;
	}
}