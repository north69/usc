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
		return new Square($this->width);
	}
}